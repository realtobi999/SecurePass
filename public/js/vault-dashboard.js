let currentOpenDropdown = null;

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

function copyText(password) {
    navigator.clipboard.writeText(password)
        .then(function() {
            document.querySelector("#successMessageText").innerHTML = "Copied to clipboard";
            document.querySelector("#successMessage").classList.remove('hidden');
            setTimeout(function() {
                document.querySelector("#successMessage").classList.add('hidden');
            }, 3000);
        })
        .catch(function(err) {
            console.error('Unable to copy password', err);
            alert('Error copying password. Please try again.');
        });
}

function showEditPassword() {
    
    const editPasswordElement = document.querySelector("#editPassword");
    editPasswordElement.classList.toggle('hidden');

    if (currentPasswordId !== null) {
        var passwordInput = document.querySelector("#editPassword [name='inputPasswordID']");
        passwordInput.value = currentPasswordId;
    }

}


function showDeletePassword() {
    const deletePasswordElement = document.querySelector("#deletePassword");
    deletePasswordElement.classList.toggle('hidden');

    if (currentPasswordId !== null) {
        var passwordInput = document.querySelector("#deletePassword [name='inputPasswordID']");
        passwordInput.value = currentPasswordId;
    }
}
