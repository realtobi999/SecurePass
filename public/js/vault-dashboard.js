let currentOpenDropdown = null;
let currentPasswordId = null;



function toggleDropdown(event, id) {
    event.preventDefault();
    const dropdownMenu = document.querySelector("#dropdownMenu" + id);

    if (currentOpenDropdown) {
        currentOpenDropdown.classList.add('hidden');
        currentOpenDropdown.classList.remove('block');
    }

    if (currentOpenDropdown !== dropdownMenu) {
        dropdownMenu.classList.toggle('hidden');
        dropdownMenu.classList.toggle('block');
        currentOpenDropdown = dropdownMenu;
        currentPasswordId = id;
    } else {
        currentOpenDropdown = null;
        currentPasswordId = null;
    }
}

function copyText(text) {
    navigator.clipboard.writeText(text)
    document.querySelector("#successMessageJSText").innerHTML = "Copied to clipboard!";
    document.querySelector("#successMessageJS").classList.remove('hidden');
    setTimeout(function() {
        document.querySelector("#successMessageJS").classList.add('hidden');
    }, 3000);
        
}

function showEditPassword() {
    
    const editPasswordElement = document.querySelector("#editPassword");
    editPasswordElement.classList.toggle('hidden');

    if (currentPasswordId !== null) {
        var passwordInput = document.querySelector("#editPassword [name='passwordID']");
        passwordInput.value = currentPasswordId;
    }

}


function showDeletePassword() {
    const deletePasswordElement = document.querySelector("#deletePassword");
    deletePasswordElement.classList.toggle('hidden');

    if (currentPasswordId !== null) {
        var passwordInput = document.querySelector("#deletePassword [name='passwordID']");
        passwordInput.value = currentPasswordId;
    }
}



