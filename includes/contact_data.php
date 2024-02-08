<?php

function postData($name, $email, $companyName, $telephone, $message)
    {
        include("db-conn.php");

        try {
            $sql = $conn->prepare('
                INSERT INTO contact_form (name, email, company_name, phone, message)
                VALUES (:name, :email, :company_name, :phone, :message);
            ');

            $sql->bindValue(":name", $name, PDO::PARAM_STR);
            $sql->bindValue(":email", $email, PDO::PARAM_STR);
            $sql->bindValue(":company_name", $companyName, PDO::PARAM_STR);
            $sql->bindValue(":phone", $telephone, PDO::PARAM_STR);
            $sql->bindValue(":message", $message, PDO::PARAM_STR);

            $sql->execute();
            return true;
        }
        catch (PDOException $e)
        {
            echo 'Unable to send data ' . $e->getMessage();
            exit;
        }
    }
