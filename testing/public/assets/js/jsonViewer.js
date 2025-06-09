document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("fileInput");
    const validateBtn = document.getElementById("validateBtn");
    const formatBtn = document.getElementById("formatBtn");
    const minifyBtn = document.getElementById("minifyBtn");
    const downloadBtn = document.getElementById("downloadBtn");
    const tabWidthSelect = document.getElementById("tabWidthSelect");
    const codeInput = document.getElementById("codeInput");
    const formattedOutput = document.getElementById("formattedOutput");
    const statusMessage = document.getElementById("statusMessage");

    // Upload data
    fileInput.addEventListener("change", (e) => {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = (evt) => {
            codeInput.value = evt.target.result;
            validateJSON();
        };
        reader.onerror = () => {
            showStatus("Error reading file", "invalid");
        };
        reader.readAsText(file);
    });

    // Validate JSON
    validateBtn.addEventListener("click", validateJSON);

    function validateJSON() {
        try {
            JSON.parse(codeInput.value);
            return true;
        } catch (err) {
            showStatus("❗ Invalid JSON: " + err.message, "invalid");
            return false;
        }
    }

    // Format / Beautify
    formatBtn.addEventListener("click", async () => {
        if (!validateJSON()) return;

        try {
            const tab = parseInt(tabWidthSelect.value) || 4;
            const code = codeInput.value;

            // Use the correct Prettier format with proper parser
            const formatted = await prettier.format(code, {
                parser: "json",
                plugins: prettierPlugins,
                tabWidth: tab,
                printWidth: 80,
                singleQuote: false,
                trailingComma: "none",
                semi: false,
            });

            formattedOutput.textContent = formatted;
        } catch (err) {
            formattedOutput.textContent = "Formatting error: " + err.message;
            showStatus("Formatting failed", "invalid");
            console.error(err); // Log error to console for debugging
        }
    });

    // Minify / Compact
    minifyBtn.addEventListener("click", () => {
        if (!validateJSON()) return;

        try {
            const obj = JSON.parse(codeInput.value);
            formattedOutput.textContent = JSON.stringify(obj);
        } catch (err) {
            formattedOutput.textContent = "Minify error: " + err.message;
            showStatus("Minify failed", "invalid");
        }
    });

    // Download
    downloadBtn.addEventListener("click", () => {
        if (
            !formattedOutput.textContent ||
            formattedOutput.textContent === "Formatted output will appear here…"
        ) {
            showStatus("No content to download", "invalid");
            return;
        }

        try {
            const content = formattedOutput.textContent;
            const blob = new Blob([content], {
                type:
                    content.includes(",") && content.includes("\n")
                        ? "text/csv"
                        : "application/json",
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement("a");
            a.href = url;
            a.download =
                content.includes(",") && content.includes("\n")
                    ? "output.csv"
                    : "output.json";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
            showStatus("Download started", "valid");
        } catch (err) {
            showStatus("Download failed: " + err.message, "invalid");
        }
    });

    function showStatus(message, className) {
        statusMessage.textContent = message;
        statusMessage.className = "status-message text-center " + className;
    }

    // Initial validation check when content changes
    codeInput.addEventListener("input", function () {
        if (this.value.trim() === "") {
            statusMessage.textContent = "";
            statusMessage.className = "status-message text-center";
        }
    });
});
