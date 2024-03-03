<?php
include("includes/contact_data.php");

$placeholderText = "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?";

if (!isset($_SESSION['success'])) {
    $_SESSION['success'] = false;
}

if (!isset($_SESSION['errorMessage'])) {
    $_SESSION['errorMessage'] = [];
}

function sanitizeInput($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    $input = stripslashes($input);
    return $input;
}

function validateInput($postData, $input, $regex = true, $maxLength = null)
{
    if (empty($postData) == true)
    {
        array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
        return false;
    }
    else if ($maxLength !== null && strlen($postData) > $maxLength)
    {
        array_push($_SESSION['errorMessage'], "The " . $input . " must not exceed " . $maxLength . " characters.");
        return false;
    }
    else if ($regex == false)
    {
        array_push($_SESSION['errorMessage'], "The " . $input . " format is incorrect.");
        return false;
    }
    else
    {
        return true;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST['contact-name']);
    $_SESSION['name'] = $name;

    $company = sanitizeInput($_POST['company']);
    $_SESSION['company'] = $company;

    $email = sanitizeInput($_POST['contact-email']);
    $_SESSION['email'] = $email;

    $telephone = sanitizeInput($_POST['telephone']);
    $_SESSION['telephone'] = $telephone;

    $message = sanitizeInput($_POST['message']);
    $_SESSION['message'] = $message;

    $marketing = sanitizeInput($_POST['marketing']);

    $nameRegex = "/^[a-zA-Z-' ]*$/";
    $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

    $isNameValid = validateInput($name, "name", preg_match($nameRegex, $name));
    $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
    $isPhoneValid = validateInput($telephone, "telephone", preg_match($phoneRegex, $telephone), 20);
    $isMessageValid = validateInput($message, "message");

    $formFields = [
        'contact-name' => $name,
        'contact-email' => $email,
        'company' => $company,
        'telephone' => $telephone,
        'message' => $message,
    ];

    if ($isNameValid && $isEmailValid && $isPhoneValid && $isMessageValid) {
        postData($name, $email, $company, $telephone, $message, $marketing);

        $_SESSION['errorMessage'] = [];

        // Unset session variables only after successful submission
        foreach ($formFields as $field => $value) {
            unset($_SESSION[$field]);
        }

        // Set form_sent to true for successful submission
        $_SESSION['form_sent'] = true;
    } else {
        // Set form_sent to false on validation error
        $_SESSION['form_sent'] = false;

        // Set session variables to retain form field values on validation error
        foreach ($formFields as $field => $value) {
            $_SESSION[$field] = $value;
        }

        // Clear the success message on page load
        unset($_SESSION['success']);
    }

    // Redirect to prevent form resubmission on page reload
    header("Location: contact-us.php#contact-form");
    exit();
}

