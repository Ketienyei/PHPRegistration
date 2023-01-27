<?php
 include ('dbh.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>All Students Details</h4>
        <table class="table table hover table dashboard table sm">

        <tr>

        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Course</th>
        <th>Update</th>
        <th>Delete</th>
           
        </tr>
        </table>
    </div>
    
</body>
</html>
<?php
$query = "SELECT * FROM sample";
$statement = $databaseConnection->prepare ($query);
$statement -> execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);
if($result){
   foreach($results as $row ){}
   }

?>

<tr>
    <td><? $row['firstname']?></td>
    <td><? $row['lastname']?></td>
    <td><? $row['email']?></td>  
    <td><? $row['course']?></td>
    
    
</tr>


