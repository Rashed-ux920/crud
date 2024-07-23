<?php
//-----------------------------------------------insert (done)------------------------------------------------------

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        $email = $_POST["email"];
        $pwd = $_POST["password"];
  
            try {
                //code...
                include "database/dbh.inc.php";
    
                $query = "INSERT INTO users( username, email, pwd) VALUES (:username,:email,:pwd)";
    
                $stmt = $pdo ->prepare($query);
    
                $stmt->execute([
                    'username' => $user,
                    'email' => $email,
                    'pwd' => $pwd
                ]);
                
                // $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
                 $pdo = null;
                 $stmt = null;
                
                 header("Location: index.php");
            } catch (PDOException $e) {
                
                die("query falied: " . $e ->getmessage());
            }
 
    }
    else {
        
        header("Location: index.php");
    }