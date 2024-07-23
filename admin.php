<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {  // Change GET to POST
    // $user = $_POST["username"];
    // $email = $_POST["email"];
    // $pwd = $_POST["password"];

    try {
        include "database/dbh.inc.php";

        // Select query to count the number of users
        $query = "SELECT COUNT(*) as user_count FROM USERS;";

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        // Fetch the count result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $userCount = $result['user_count'];

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {  // Change GET to POST
        // $user = $_POST["username"];
        // $email = $_POST["email"];
        // $pwd = $_POST["password"];
    
        try {
            include "database/dbh.inc.php";
    
            // Select query to count the number of users
            $query = "SELECT username as names FROM USERS;";
    
            $stmt = $pdo->prepare($query);
            $stmt->execute();
    
            // Fetch the count result
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // $userCount = $result['names'];
    
            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } else {
        header("Location: index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- ---------------------------------------------------------------------------read (done)--------------------------------------------------  -->
</head>
<body>
    <header>
        <a href="index.php"><h4>Tasketo</h4></a>
        <div class="signin">
            <a href="admin.php">Admin</a>
        </div>
    </header>
    <section>
        <div class="info">
            <h1>
            Number of users: <br>
            <br>
            <?php echo isset($userCount) ? $userCount : '0'; ?>
            </h1>
        </div>
        <div class="info">
            <h1>
                the names of USERS <br>
                <br>
                <?php
                    foreach ($result as $key) {
                        # code...
                        
                        echo $key["names"];
                        echo "<br>";
                    
                    }
                ?>
            </h1>
        
        </div>
    </section>
</body>
</html>
