<?php 

    include "db.php";
    include_once "session.php";

    function encodePass($pass) {

        $pass = md5($pass);
        $pass = sha1($pass);
        $pass = crypt($pass, $pass);

        return $pass;

    }

    function query($sql, $params = []) {

        global $connect;
        $stmt = $connect->prepare($sql);

        return $stmt->execute($params);

    }

    function getAll($sql, $params = []) {

        global $connect;
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    function getOne($sql, $params = []) {

        global $connect;
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetch(PDO::FETCH_OBJ);

    }

    function sortID($table) {

        global $connect;
        $id = 1;
        
        $sql = "SELECT max(id) as maxID FROM $table";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $max_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($max_id as $key) {
    
            $id = $key['maxID'] + 1;
    
        }
    
        return $id;

    }

    function goHeader($path) {
        header("Location:$path");
    }

    function checkRow($sql) {

        global $connect;

        $stmt = $connect->prepare($sql);
        $stmt->execute();

        return $stmt->rowCount();

    }
















    /*=================For Temp================*/
    function createTable() {

        global $connect;

        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
            email VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        )";

        $stmt = $connect->prepare($sql);
        return $stmt->execute();
    }
    
    function signup($name, $email, $pass, $table) {

        $id = sortID($table);

        $sql = "INSERT INTO users (id, name, email, password) VALUES(?, ?, ?, ?)";
        $ans = query($sql, [$id, $name, $email, $pass]);

        if($ans) {
            
            $rID = sortID('role_user');
            define('ROLE_ID', 2);
            $sql = "INSERT INTO role_user (id, user_id, role_id) VALUES(?, ?, ?)";
            $res = query($sql, [$rID, $id, ROLE_ID]);


            return $res;

        }

    }

    function getResult($data) {

        echo "<pre>" . print_r($data, true) . "</pre>";

    }


    function insertPost($title, $content, $img, $post_date, $table) {

        $id = sortID($table);

        $sql = "INSERT INTO post (id, title, content, image, created_at) VALUES(?, ?, ?, ?, ?)";
        $res = query($sql, [$id, $title, $content, $img, $post_date]);

        return $res;
    }







?>