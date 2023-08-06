<script>
    const elementSelector = (el) => {
        return document.querySelector(el);
    }

    elementSelector("#bvnVerifyButton").addEventListener("click", function() {
        const bvn = elementSelector("#bvnInput").value;

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
                const bvnOwnerDetail = data.data;

                for (const key in bvnOwnerDetail) {
                    if (bvnOwnerDetail.hasOwnProperty(key)) {
                        const value = bvnOwnerDetail[key];
                        bvnOwnerDetailRow += `<tr><td>${key}</td><td>${value}</td></tr>`;
                    }
                }

                elementSelector("#bvnOwnerDetail").innerHTML = bvnOwnerDetailRow;
            })
            .catch(error => {
                console.log(error);

            });
    });

</script>
