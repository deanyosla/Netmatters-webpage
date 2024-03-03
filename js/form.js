const nameElement = document.querySelector("#contact-name");
const companyNameElement = document.querySelector("#company");
const emailElement = document.querySelector("#contact-email");
const phoneElelent = document.querySelector("#telephone");
const messageElement = document.querySelector("#message");
const btnClose = document.querySelector(".close");

const errorValidation = document.querySelector(".alert-fail");
const successValidation = document.querySelector(".alert-success");

const form = document.querySelector("#contact-form");

const isRequired = value => value === "" ? false : true; 
const isNameValid = (name) => {
    const regex = /^[A-Za-z\s-]+$/;
    return regex.test(name);
}

const isEmailValid = (email) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

const isPhoneValid = (number) => {
    const  regex = /^[\d\s+()-]*$/;
    // Trim the input value to remove extra spaces
    const trimmedNumber = number.trim();
    // Check if the trimmed number matches the regular expression and has a length of at most 20
    return regex.test(trimmedNumber) && trimmedNumber.length <= 20;
}

const showError = (input) => {
    const formField = input.parentElement;
    
    formField.classList.remove("success");
    formField.classList.add("error");
}

const showSuccess = (input) => {
    const formField = input.parentElement;

    formField.classList.remove("error");
    formField.classList.add("success");
}

const checkName = () => {
    let valid = false;

    const name = nameElement.value;

    if (!isRequired(name) || !isNameValid(name))
    {
        showError(nameElement)
    }
    else
    {
        showSuccess(nameElement);
        valid = true;
    }

    return valid;
}

const checkMessage = () => {
    let valid = false;

    const message = messageElement.value;

    if (!isRequired(message))
    {
        showError(messageElement);
    }
    else
    {
        showSuccess(messageElement);
        valid = true;
    }

    return valid;
}

const checkEmail = () => {
    let valid = false;

    const email = emailElement.value.trim();
    console.log(email);

    
    if (!isEmailValid(email))
    {
        showError(emailElement);
    }
    else
    {
        showSuccess(emailElement);
        valid = true;
    }

    return valid;
}

const checkPhoneNumber = () => {
    let valid = false;

    const phoneNumber = phoneElelent.value.trim();
    console.log(phoneNumber);

    if (!isPhoneValid(phoneNumber))
    {
        showError(phoneElelent);
    }
    else
    {
        showSuccess(phoneElelent);
        valid = true;
    }

    return valid;
}

btnClose.addEventListener("click", function (e) {
    e.preventDefault();

    if (errorValidation != null)
    {
        e.target.closest('div.alert-fail').remove();
    }
    
    if (successValidation != null)
    {
        e.target.closest('div.alert-success').remove();
    }
    
});

form.addEventListener("input", function (e){
    switch (e.target.id)
    {
        case "contact-name":
            checkName();
            break;

        case "contact-email":
            checkEmail();
            break;

        case "telephone":
            checkPhoneNumber();
            break;

        case "message":
            checkMessage();
            break;
    }
});
