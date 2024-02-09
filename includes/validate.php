<?php
    include("includes/contact_data.php");
    
    $placeholderText = "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?";

    if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }
    
    function sanatiseInput($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    function validateInput($postData, $input, $regex=true)
    {
        if (empty($postData) == true)
        {
            array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
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

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = sanatiseInput($_POST['contact-name']);
        $_SESSION['name'] = $name;

        $company = sanatiseInput($_POST['company']);
        $_SESSION['company'] = $company;

        $email = sanatiseInput($_POST['contact-email']);
        $_SESSION['email'] = $email;

        $telephone = sanatiseInput($_POST['telephone']);
        $_SESSION['telephone'] = $telephone;

        $message = sanatiseInput($_POST['message']);
        $_SESSION['message'] = $message;
        
        $nameRegex = "/^[a-zA-Z-' ]*$/";
        $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

        $isNameValid = validateInput($name, "name", preg_match($nameRegex, $name));
        $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
        $isPhoneValid = validateInput($telephone, "telephone", preg_match($phoneRegex, $telephone));
        $isMessageValid = validateInput($message, "message");

        if ($isNameValid && $isEmailValid && $isPhoneValid && $isMessageValid)
        {
            postData($name, $email, $company, $telephone, $message);

            unset($_SESSION['contact-name']);
            unset($_SESSION['contact-email']);
            unset($_SESSION['company']);
            unset($_SESSION['telephone']);
            unset($_SESSION['message']);

            $_SESSION['success'] = true;
            $_SESSION['errorMessage'] = [];

            $_SESSION['form_sent'] = true;

            //echo 'Data submitted to the Database Successfully';
            header("Location: contact-us.php#contact-form");
        
            exit();

        }
        else
        {
            $_SESSION['form_sent'] = false;
            header("Location: contact-us.php#contact-form");

            exit();
        }
    }
