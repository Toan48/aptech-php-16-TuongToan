<form action="dangnhap.php" method="GET">
    <div>
    <label for="email" >Email</label>
    <input type="email" name="email-acount" require>
    </div>
    <div>
    <label for="password">password</label>
    <input type="password" name="password" require>
    </div>
    <button type="submit">submit</button>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_16_tuongtoan";

try {
    $conn = new PDO("mysql:host=$servername;dbname=aptech_php_16_tuongtoan", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    // sql to create table
    $sql = "CREATE TABLE admins (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table MyGuests created successfully";

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;