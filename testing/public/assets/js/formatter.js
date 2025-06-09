document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('fileInput');
            const languageSelect = document.getElementById('languageSelect');
            const formatBtn = document.getElementById('formatBtn');
            const minifyBtn = document.getElementById('minifyBtn');
            const downloadBtn = document.getElementById('downloadBtn');
            const codeInput = document.getElementById('codeInput');
            const formattedOutput = document.getElementById('formattedOutput');
            const statusMessage = document.getElementById('statusMessage');
            const tabWidthSelect = document.getElementById('tabWidthSelect');

            // Handle file input
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function(e) {
                    codeInput.value = e.target.result;
                    // Try to detect language from file extension
                    const ext = file.name.split('.').pop().toLowerCase();
                    if (ext === 'js') languageSelect.value = 'javascript';
                    else if (ext === 'ts') languageSelect.value = 'typescript';
                    else if (ext === 'html') languageSelect.value = 'html';
                    else if (ext === 'css') languageSelect.value = 'css';
                    else if (ext === 'json') languageSelect.value = 'json';
                };
                reader.readAsText(file);
            });

            // Format code
            formatBtn.addEventListener('click', function() {
                try {
                    const code = codeInput.value;
                    const language = languageSelect.value;
                    const tabWidth = parseInt(tabWidthSelect.value);
                    
                    let parser;
                    switch(language) {
                        case 'json': parser = 'json'; break;
                        case 'javascript': parser = 'babel'; break;
                        case 'typescript': parser = 'typescript'; break;
                        case 'html': parser = 'html'; break;
                        case 'css': parser = 'css'; break;
                        default: parser = 'babel';
                    }
                    
                    const formattedCode = prettier.format(code, {
                        parser: parser,
                        plugins: prettierPlugins,
                        tabWidth: tabWidth,
                        useTabs: false,
                        semi: true,
                        singleQuote: true
                    });
                    
                    formattedOutput.textContent = formattedCode;
                    statusMessage.textContent = "Code formatted successfully";
                    statusMessage.className = "status-message valid";
                } catch (e) {
                    statusMessage.textContent = "Error: " + e.message;
                    statusMessage.className = "status-message invalid";
                }
            });

            // Minify code
            minifyBtn.addEventListener('click', function() {
                try {
                    const code = codeInput.value;
                    const language = languageSelect.value;
                    
                    let minifiedCode = code;
                    if (language === 'json') {
                        minifiedCode = JSON.stringify(JSON.parse(code));
                    } else {
                        // Basic minification (remove extra whitespace)
                        minifiedCode = code
                            .replace(/\/\*[\s\S]*?\*\/|([^\\:]|^)\/\/.*$/gm, '') // Remove comments
                            .replace(/\s+/g, ' ') // Collapse whitespace
                            .replace(/^\s+|\s+$/g, ''); // Trim
                    }
                    
                    formattedOutput.textContent = minifiedCode;
                    statusMessage.textContent = "Code minified successfully";
                    statusMessage.className = "status-message valid";
                } catch (e) {
                    statusMessage.textContent = "Error: " + e.message;
                    statusMessage.className = "status-message invalid";
                }
            });

            // Download
            downloadBtn.addEventListener('click', function() {
                if (!formattedOutput.textContent.trim()) {
                    statusMessage.textContent = "No content to download";
                    statusMessage.className = "status-message invalid";
                    return;
                }

                const blob = new Blob([formattedOutput.textContent], { type: 'text/plain' });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'formatted-code.' + languageSelect.value;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        });