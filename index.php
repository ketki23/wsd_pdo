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

  $sqlresult =$conn->prepare("select * from accounts where id < 6");
  $sqlresult -> execute();
  $rows =$sqlresult->rowCount();
  echo '<br>';
  echo "Number of records= $rows".'<br>'.'<br>'; 
  echo "The records are displayed below:".'<br>'.'<br>'; 
  $display = $sqlresult->setFetchMode(PDO::FETCH_ASSOC); 

  
  //$sqlresult->execute(array(':id'=>6));
  
  echo "<table border='3'>";
   echo "<tr><td>id</td><td>email</td><td>fname</td><td>lname</td><td>phone</td><td>birthday</td><td>gender</td><td>password</td></tr>";

  foreach ($sqlresult as $row)
  {
    echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['phone']}</td><td>{$row['birthday']}</td><td>{$row['gender']}</td><td>{$row['password']}</td></tr>";
  }

  
  
/*  if($sqlresult->rowCount())
  {
  echo "The number of records is ".$sqlresult->rowCount().'<br><br>';
  }
  else 
  {
  echo "No results";
  }
  
  

  echo "<table border='1'>";
   echo "<tr><td>id</td><td>email</td><td>fname</td><td>lname</td><td>phone</td><td>birthday</td><td>gender</td><td>password</td></tr>";

  foreach ($sqlresult as $row)
  {
    echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['phone']}</td><td>{$row['birthday']}</td><td>{$row['gender']}</td><td>{$row['password']}</td></tr>";
  }
  
  */
  ?>