<?php 
require('./read.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1px>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
        </tr>
<?php while($results = mysqli_fetch_assoc($sqlExecute)){
    ?>
        <tr>
            <td><?php echo $results['ID']?></td>
            <td><?php echo $results['name']?></td>
            <td><?php echo $results['password']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>