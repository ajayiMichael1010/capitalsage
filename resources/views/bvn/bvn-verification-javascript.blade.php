<script>
    const selectElement = (el) => {
        return document.querySelector(el);
    }
    selectElement(".spinningIcon").style.display = "none";

    selectElement("#bvnVerifyButton").addEventListener("click", function() {
        const bvn = selectElement("#bvnInput").value;
        selectElement(".spinningIcon").style.display = "block";

        fetch("{{route('verifyBvn')}}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token if needed
            },
            body: JSON.stringify({
                bvn: bvn
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Request failed.');
            }
            return response.json();
        })
        .then(data => {
            let bvnOwnerDetailRow = "";
            console.log(data);
            const bvnOwnerDetail = data;

            for (const key in bvnOwnerDetail) {
                if (bvnOwnerDetail.hasOwnProperty(key)) {
                    const value = bvnOwnerDetail[key];
                    if(key ==="image"){
                        bvnOwnerDetailRow += `<tr><td>${key}</td><td><img src="${value}" width="150" class="rounded"></td></tr>`;
                    }
                    else{
                        bvnOwnerDetailRow += `<tr><td>${key}</td><td>${value}</td></tr>`;
                    }
                }
            }

            selectElement("#bvnOwnerDetail").innerHTML = bvnOwnerDetailRow;
            selectElement(".spinningIcon").style.display = "none";
        })
        .catch(error => {
            //console.log(error);
            selectElement(".spinningIcon").style.display = "none";
            // let bvnErrorDetail = error;
            // for (const key in bvnErrorDetail) {
            //     if (bvnErrorDetail.hasOwnProperty(key)) {
            //         const value = bvnErrorDetail[key];
            //         bvnErrorDetail += `<tr><td>${key}</td><td>${value}</td></tr>`;
            //     }
            // }
        });
    });

</script>
