function validateForm() {
    const firstNameInput = document.getElementById('firstName')
    const firstNameErrorIcon = document.getElementById('firstNameErrorIcon')

    const lastNameInput = document.getElementById('lastName')
    const lastNameErrorIcon = document.getElementById('lastNameErrorIcon')

    const emailInput = document.getElementById('email')
    const emailErrorIcon = document.getElementById('emailErrorIcon')

    const messageInput = document.getElementById('message')
    const messageErrorIcon = document.getElementById('messageErrorIcon')


    //checks if firstName is empty
    if (!firstNameInput.value) {
        firstNameErrorIcon.classList.remove('d-none');
    }

    //checks if lastName is empty
    if (!lastNameInput.value) {
        lastNameErrorIcon.classList.remove('d-none');
    }

    //checks if email is empty
    if (!emailInput.value) {
        emailErrorIcon.classList.remove('d-none');
    }

    //checks if message is empty
    if (!messageInput.value) {
        messageErrorIcon.classList.remove('d-none');
    }


    if (emailInput.value !== '@') {
        emailErrorIcon.classList.remove('d-none');
        $echo = '@ sign is needed';
    }
}





