document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("fileInput");
    const convertBtn = document.getElementById("convertBtn");
    const downloadBtn = document.getElementById("downloadBtn");
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
        };
        reader.onerror = () => {
            showStatus("Error reading file", "invalid");
        };
        reader.readAsText(file);
    });

    function validateJSON() {
        try {
            JSON.parse(codeInput.value);
            return true;
        } catch (err) {
            showStatus("❗ Invalid JSON: " + err.message, "invalid");
            return false;
        }
    }

    // Convert JSON to CSV
    convertBtn.addEventListener("click", () => {
        if (!validateJSON()) return;

        try {
            const data = JSON.parse(codeInput.value);
            if (!Array.isArray(data))
                throw new Error("JSON must be an array of objects");

            const keys = Array.from(new Set(data.flatMap(Object.keys)));
            const rows = data.map((obj) =>
                keys
                    .map((k) => {
                        const value = obj[k] !== undefined ? obj[k] : "";
                        return typeof value === "string"
                            ? `"${value.replace(/"/g, '""')}"`
                            : value;
                    })
                    .join(",")
            );

            formattedOutput.textContent = [keys.join(","), ...rows].join("\n");
        } catch (err) {
            formattedOutput.textContent = "Conversion error: " + err.message;
            showStatus("Conversion failed", "invalid");
        }
    });

    // Download
    downloadBtn.addEventListener("click", () => {
        if (!formattedOutput.textContent) {
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
