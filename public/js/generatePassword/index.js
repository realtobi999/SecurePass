
document.addEventListener("DOMContentLoaded", function () {
    // Function to generate a random password
    function generatePassword(length, includeUppercase, includeNumbers, includeSymbols) {
        const charset = "abcdefghijklmnopqrstuvwxyz" +
                        (includeUppercase ? "ABCDEFGHIJKLMNOPQRSTUVWXYZ" : "") +
                        (includeNumbers ? "0123456789" : "") +
                        (includeSymbols ? "!@#$%^&*()-_+=" : "");

        let password = "";
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charset.length);
            password += charset.charAt(randomIndex);
        }

        return password;
    }

    // Function to update the displayed password
    function updatePasswordDisplay() {
        const passwordLength = document.getElementById("charactersNumber").value;
        const includeUppercase = document.getElementById("includeUppercase").checked;
        const includeNumbers = document.getElementById("includeNumbers").checked;
        const includeSymbols = document.getElementById("includeSymbols").checked;

        const generatedPassword = generatePassword(passwordLength, includeUppercase, includeNumbers, includeSymbols);

        document.getElementById("passwordDisplay").innerText = generatedPassword;
    }

    // Event listeners for range input and checkboxes
    document.getElementById("charactersRange").addEventListener("input", updatePasswordDisplay);
    document.getElementById("includeUppercase").addEventListener("change", updatePasswordDisplay);
    document.getElementById("includeNumbers").addEventListener("change", updatePasswordDisplay);
    document.getElementById("includeSymbols").addEventListener("change", updatePasswordDisplay);

    // Button click event listener to generate a new password
    document.querySelector("#generateButton").addEventListener("click", updatePasswordDisplay);

    // Initial password generation on page load
    updatePasswordDisplay();
});



// Sync the range and the number input
const charactersRange = document.querySelector("#charactersRange");
const charactersNumber = document.querySelector("#charactersNumber");

charactersRange.addEventListener("input", syncCharcs);
charactersNumber.addEventListener("input", syncCharcs);

function syncCharcs() {
    charactersNumber.value = charactersRange.value;
}

function copyText() {
    const passwordDisplay = document.getElementById("passwordDisplay");
    const password = passwordDisplay.innerText;

    navigator.clipboard.writeText(password);
    console.log("copied");

    document.querySelector("#successMessageJSText").innerHTML = "Copied to clipboard!";
    document.querySelector("#successMessageJS").classList.remove('hidden');

    setTimeout(function() {
        document.querySelector("#successMessageJS").classList.add('hidden');
    }, 3000);
}

