<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $user = $_POST["username"];
    $pwd = $_POST["password"];

    try {
        //code...
        include "database/dbh.inc.php";

        $query = "SELECT username,pwd FROM users WHERE username = :username && pwd = :pwd";

        $stmt = $pdo ->prepare($query);

        $stmt->execute([
            'username' => $user,
            // 'email' => $email,
            'pwd' => $pwd
        ]);
        
        // $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
         $pdo = null;
         $stmt = null;
        if ($user == "root" && $pwd == "951rashed") {
            # code...
            header("Location: admin.php");
        }
        else{
            if ($user&&$pwd == true) {
                # code...
            }
            header("Location: index.php");

        }
         
    } catch (PDOException $e) {
        
        die("query falied: " . $e ->getmessage());
    }


}

?>