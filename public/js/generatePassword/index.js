

// Sync the range and the number input
const charactersRange = document.querySelector("#charactersRange");
const charactersNumber = document.querySelector("#charactersNumber");

charactersRange.addEventListener("input", syncCharcs);
charactersNumber.addEventListener("input", syncCharcs);

function syncCharcs() {
    charactersNumber.value = charactersRange.value;
}

function copyText(text) {
    navigator.clipboard.writeText(text)
    console.log("copied");
    document.querySelector("#successMessageJSText").innerHTML = "Copied to clipboard!";
    document.querySelector("#successMessageJS").classList.remove('hidden');
    setTimeout(function() {
        document.querySelector("#successMessageJS").classList.add('hidden');
    }, 3000);
        
}
