<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $host = 'localhost';
        $dbname = 'challenge';
        $username = 'root';
        $password = '';
        
        $conn = new mysqli($host, $username, $password, $dbname);
        
     
?>









<form method="POST">
    
    <div>
        <label for="">name</label>
        <input type="text" id="" name="name" value="" required>
    </div>
<div>    
    <label for="">email</label>
    <input type="text" id="" name="email" value="" required>
</div>

<select name="select" id="">
    <option value="1">admen</option>
    <option value="2">user</option>
</select>




<button type="submit" name="email" >ADD</button>
</form>


<?php


if (isset($_POST['name']) && isset($_POST['email'])&&isset($_POST['select'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $select = $_POST['select'];

    $sql = "INSERT INTO users (name, email ,select ) VALUES (?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $select); 
        $stmt->execute();

        $stmt->close();
        
        
    }

?>





    
</body>
</html>