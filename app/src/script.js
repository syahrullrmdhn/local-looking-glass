document.querySelector("#test-form").addEventListener("submit", async (event) => {
    event.preventDefault();

    const target = document.querySelector("#target").value;
    const method = document.querySelector("#method").value;

    if (!target) {
        alert("Please provide a target.");
        return;
    }

    try {
        const response = await fetch("/src/api.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ command: method, target: target }),
        });

        const result = await response.json();

        if (result.error) {
            alert(`Error: ${result.error}`);
        } else {
            document.getElementById("output").textContent = result.output;
        }
    } catch (error) {
        console.error("Error:", error);
        alert("An error occurred while processing the request.");
    }
});
