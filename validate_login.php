<?php

$conn = "";
    
try {
    $servername = "localhost:3306";
    $dbname = "contact_dn";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=contact_dn",
        $username, $password
    );
    
$conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);

	$stmt = $conn->prepare("SELECT * FROM admins");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
				header("location: contactMails.php");
		}
	}
}

?>
