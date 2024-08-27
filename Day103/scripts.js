document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('uploadForm');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        
        const formData = new FormData(form);
        const response = await fetch('upload.php', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            const data = await response.json();
            displayData(data);
        } else {
            alert('Error uploading file');
        }
    });
});

function displayData(data) {
    const dataDisplay = document.getElementById('dataDisplay');
    let html = '<table><thead><tr>';

    // Creating table headers
    data.headers.forEach(header => {
        html += `<th>${header}</th>`;
    });
    html += '</tr></thead><tbody>';

    // Creating table rows
    data.rows.forEach(row => {
        html += '<tr>';
        row.forEach(cell => {
            html += `<td>${cell}</td>`;
        });
        html += '</tr>';
    });
    html += '</tbody></table>';

    dataDisplay.innerHTML = html;
}
