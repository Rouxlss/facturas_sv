<?php

    function connection($data_base_config){
        try {
            $connection = new PDO("mysql:host=".$data_base_config['host'].";dbname=".$data_base_config['data_base'], 
                                                $data_base_config['user'], 
                                                $data_base_config['password']);
            return $connection;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    
    function clean_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function login_user($connection, $mail, $pass) {
        $query = "SELECT * FROM tbl_users WHERE email = :email AND password = :password";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':email' => $mail,
            ':password' => $pass
        ));
        return $statement->rowCount();
    }

    function get_info_user_after_login($connection, $mail, $pass) {
        $query = "SELECT * FROM tbl_users WHERE email = :email AND password = :password";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':email' => $mail,
            ':password' => $pass
        ));
        return $statement->fetch();
    }

    function verify_existing_user_by_id($connection, $id) {
        $query = "SELECT * FROM tbl_users WHERE id_user = :id_user";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':id_user' => $id
        ));
        return $statement->rowCount();
    }

    function verify_existing_user_by_mail($connection, $mail) {
        $query = "SELECT * FROM tbl_users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':email' => $mail
        ));
        return $statement->rowCount();
    }

    function redirect ($view) {
        echo "<script> window.location.href = '".SERVER_URL."?view=$view'; </script>";
    }

    function get_user_info($connection, $id){
        $query = "SELECT * FROM tbl_users WHERE id_user = :id_user";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':id_user' => $id
        ));
        return $statement->fetch();
    }

    function get_id_by_mail ($connection, $email){
        $query = "SELECT id_user FROM tbl_users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->execute(array(
            ':email' => $email
        ));
        return $statement->fetch()[0];
    }

    function get_place_categories($connection) {
        $query = "SELECT * FROM tbl_category_places";
        $statement = $connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
