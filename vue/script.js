document.addEventListener("DOMContentLoaded", function () {
    const randomButton = document.getElementById("randomButton");
    const randomWordValue = document.getElementById("randomWordValue");

    randomButton.addEventListener("click", function () {
        fetch("index.php?random=true") // Assurez-vous que le chemin est correct pour votre application
            .then(response => response.json())
            .then(randomWord => {
                displayRandomWord(randomWord);
            });
    });

    function displayRandomWord(word) {
        randomWordValue.textContent = word;
    }
});
