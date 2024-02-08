const nameEl = document.querySelector("#contact-name");
const companyNameEl = document.querySelector("#company");
const emailEl = document.querySelector("#contact-email");
const phoneEl = document.querySelector("#telephone");
const messageEl = document.querySelector("#message");
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
    
    
    const  regex = /^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/

    return regex.test(number);
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

    const name = nameEl.value;

    if (!isRequired(name) || !isNameValid(name))
    {
        showError(nameEl)
    }
    else
    {
        showSuccess(nameEl);
        valid = true;
    }

    return valid;
}

const checkMessage = () => {
    let valid = false;

    const message = messageEl.value;

    if (!isRequired(message))
    {
        showError(messageEl);
    }
    else
    {
        showSuccess(messageEl);
        valid = true;
    }

    return valid;
}

const checkEmail = () => {
    let valid = false;

    const email = emailEl.value.trim();
    console.log(email);

    
    if (!isEmailValid(email))
    {
        showError(emailEl);
    }
    else
    {
        showSuccess(emailEl);
        valid = true;
    }

    return valid;
}

const checkPhoneNumber = () => {
    let valid = false;

    const phoneNumber = phoneEl.value.trim();
    console.log(phoneNumber);

    if (!isPhoneValid(phoneNumber))
    {
        showError(phoneEl);
    }
    else
    {
        showSuccess(phoneEl);
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
