document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('fileInput');
            const convertBtn = document.getElementById('convertBtn');
            const downloadBtn = document.getElementById('downloadBtn');
            const codeInput = document.getElementById('codeInput');
            const htmlOutput = document.getElementById('htmlOutput');
            const statusMessage = document.getElementById('statusMessage');

            // Handle file input
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function(e) {
                    codeInput.value = e.target.result;
                };
                reader.readAsText(file);
            });

            // Convert JSON to HTML table
            convertBtn.addEventListener('click', function() {
                try {
                    const jsonData = JSON.parse(codeInput.value);
                    htmlOutput.innerHTML = generateTableHTML(jsonData);
                    statusMessage.className = "status-message valid";
                } catch (e) {
                    htmlOutput.textContent = "Error: " + e.message;
                }
            });

            // Generate HTML table from JSON
            function generateTableHTML(data) {
                if (Array.isArray(data)) {
                    if (data.length === 0) return "<p>Empty array</p>";
                    
                    // Get all unique keys from array items
                    const keys = [...new Set(data.flatMap(item => 
                        typeof item === 'object' && item !== null ? Object.keys(item) : []
                    ))];
                    
                    if (keys.length === 0) return "<p>No valid object data in array</p>";
                    
                    let html = '<table><thead><tr>';
                    keys.forEach(key => {
                        html += `<th>${key}</th>`;
                    });
                    html += '</tr></thead><tbody>';
                    
                    data.forEach(item => {
                        html += '<tr>';
                        keys.forEach(key => {
                            const value = item && typeof item === 'object' ? item[key] : '';
                            html += `<td>${formatValue(value)}</td>`;
                        });
                        html += '</tr>';
                    });
                    
                    return html + '</tbody></table>';
                } else if (typeof data === 'object' && data !== null) {
                    let html = '<table><tbody>';
                    for (const [key, value] of Object.entries(data)) {
                        html += `<tr><td>${key}</td><td>${formatValue(value)}</td></tr>`;
                    }
                    return html + '</tbody></table>';
                } else {
                    return `<p>${String(data)}</p>`;
                }
            }

            // Format values for display
            function formatValue(value) {
                if (value === null) return 'null';
                if (value === undefined) return '';
                if (typeof value === 'object') return JSON.stringify(value);
                return String(value);
            }

            // Download HTML
            downloadBtn.addEventListener('click', function() {
                if (!htmlOutput.innerHTML.trim()) {
                    statusMessage.textContent = "No HTML to download";
                    return;
                }

                const blob = new Blob([htmlOutput.innerHTML], { type: 'text/html' });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'converted.html';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                statusMessage.textContent = "HTML downloaded";
                statusMessage.className = "status-message valid";
            });
        });