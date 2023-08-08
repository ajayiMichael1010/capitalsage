<!-- Include Axios library for making HTTP requests -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Initialize a variable to store the HTML rows for BVN owner details
    let bvnOwnerDetailRows = "";

    // Define a function to select an HTML element by its CSS selector
    const selectElement = (el) => {
        return document.querySelector(el);
    }

    // Hide the spinning icon initially
    selectElement(".spinningIcon").style.display = "none";

    // Add an event listener to the BVN Verify button
    selectElement("#bvnVerifyButton").addEventListener("click", function() {
        // Get the BVN input value
        const bvn = selectElement("#bvnInput").value;

        // Display the spinning icon while processing
        selectElement(".spinningIcon").style.display = "block";

        // Make a POST request to verify the BVN using Axios
        axios.post("{{route('verifyBvn')}}", {bvn: bvn},{
            // Set request headers, including CSRF token
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token if needed
            },
        })
            .then(res => {
                // Handle the successful response
                console.log(res);
                const bvnOwnerDetail = res.data;

                // Iterate through BVN owner details and create HTML rows
                for (const key in bvnOwnerDetail) {
                    if (bvnOwnerDetail.hasOwnProperty(key)) {
                        const value = bvnOwnerDetail[key];
                        if(key === "image"){
                            // If the key is 'image', display an image tag
                            bvnOwnerDetailRows += `<tr><td>${key}</td><td><img src="${value}" width="150" class="rounded"></td></tr>`;
                        } else {
                            // For other keys, display text data
                            bvnOwnerDetailRows += `<tr><td>${key}</td><td>${value}</td></tr>`;
                        }
                    }
                }

                // Update the BVN owner detail table and hide the spinning icon
                selectElement("#bvnOwnerDetail").innerHTML = bvnOwnerDetailRows;
                selectElement(".spinningIcon").style.display = "none";
            })
            .catch(error => {
                // Handle errors and display error message in the table
                let bvnErrorDetail = error.response.data.message;
                bvnOwnerDetailRows += `<tr><td>Message</td><td style="color: red">${bvnErrorDetail}</td></tr>`;
                selectElement("#bvnOwnerDetail").innerHTML = bvnOwnerDetailRows;
                selectElement(".spinningIcon").style.display = "none";
            });

        // Reset the HTML rows variable
        bvnOwnerDetailRows = "";
    });
</script>
