<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action = "index.php">
        Name: <br><input type="text" name="name"><br><br>
        Password: <br><input type="password" name="password"><br><br>
        <input type="submit" value="Check" name="submit">
     
    </form>
</body>
</html>

<?php 

include "db_con.php";

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    $query = "select * from userlist where name = '{$name}' and password = '{$password}'";
    $sqlResult = mysqli_query($con, $query);

 
    
// option 1
// if($user['name'] == $name && $user['password'] == $password){
//     echo "Available account";
// }else{
//     echo "not Existing";
// }


// option 2
if($sqlResult) {
    $user = mysqli_fetch_assoc($sqlResult);
    if($user) {
        echo "Available account";
        header("Location: http://localhost/lab3/file.php"); 
        exit; 
    } else {
        echo "Account does not exist";
    }
} else {
    echo "Query failed: " . mysqli_error($con);
}
}







?>

