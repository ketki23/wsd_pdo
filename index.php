<?php
$servername = "mysql:dbname=kra23;host=sql1.njit.edu";
$username = "kra23";
$password = "z4QhaWbRd";

try {
    $conn = new PDO($servername, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br><br><br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

  $sqlresult =$conn->query("select * from accounts");
  
  foreach ($sqlresult as $row)
  {
  	echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['phone']}</td><td>{$row['birthday']}</td><td>{$row['gender']}</td><td>{$row['password']}</td></tr>";
  }
  ?>