document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".contact-form");
    const alertWrap = document.querySelector(".alert-wrap");

    form.addEventListener("submit", function(event) {
      event.preventDefault();

      // Reset previous messages and styling
      alertWrap.innerHTML = "";
      resetInputStyles(form);

      // Validation logic
      const nameInput = form.querySelector("#contact-name");
      const emailInput = form.querySelector("#contact-email");
      const telephoneInput = form.querySelector("#telephone");

      // Email and telephone validation regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const telephoneRegex = /^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/;

      const name = nameInput.value.trim();
      const email = emailInput.value.trim();
      const telephone = telephoneInput.value.trim();

      if (name === "") {
        displayErrorMessage("Please enter your name.", nameInput);
      }
      if (email === "" || !emailRegex.test(email)) {
        displayErrorMessage("Please enter a valid email address.", emailInput);
      }
      if (telephone === "" || !telephoneRegex.test(telephone)) {
        displayErrorMessage("Please enter a valid telephone number.", telephoneInput);
      }

      // Focus on the first input field with an error
      const firstErrorInput = form.querySelector(".error");
      if (firstErrorInput) {
        firstErrorInput.focus();
      } else {
        displaySuccessMessage("Your message has been sent!");
      }
    });

    function displayErrorMessage(message, inputElement) {
      const errorDiv = createAlertDiv("alert-fail", message);
      alertWrap.appendChild(errorDiv);
      inputElement.classList.add("error");
    }

    function displaySuccessMessage(message) {
      const successDiv = createAlertDiv("alert-success", message);
      alertWrap.appendChild(successDiv);
    }

    function createAlertDiv(className, message) {
      const div = document.createElement("div");
      div.classList.add(className, "alert");
      div.innerHTML = "<span>" + message + "</span><button class='close'>x</button>";
      div.querySelector(".close").addEventListener("click", function() {
        div.style.display = "none";
      });
      return div;
    }

    function resetInputStyles(form) {
      const inputElements = form.querySelectorAll("input");
      inputElements.forEach(function(input) {
        input.classList.remove("error");
      });
    }
    window.addEventListener('load', function() {
        resetInputStyles(form);
      });
  });

