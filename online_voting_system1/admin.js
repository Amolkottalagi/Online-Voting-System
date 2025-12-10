document.addEventListener('DOMContentLoaded', function () {
    // Fetch voting results from admin.php
    fetch('admin.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse the JSON response
        })
        .then(data => {
            const tbody = document.querySelector('#resultsTable tbody');
            // Clear existing rows (if any)
            tbody.innerHTML = '';
            // Loop through the data and create table rows
            data.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = <td>${row.candidate_name}</td><td>${row.vote_count}</td>;
                tbody.appendChild(tr);
            });
        })
        .catch(error => {
            console.error('Error fetching voting results:', error);
            // Display an error message on the page
            const tbody = document.querySelector('#resultsTable tbody');
            tbody.innerHTML = '<tr><td colspan="2">Error loading voting results. Please try again later.</td></tr>';
        });
});