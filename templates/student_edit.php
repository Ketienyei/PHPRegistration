<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
    if (isset($_GET['Id'])){
        $student_id=$_GET['id'];
        $query = "SELECT *FORM studentsdetails WHERE id =:id LIMIT 1";
        $statement = $databaseconnection->prepare($query);
        $data =[':id'=>$student_id];
        $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    ?>
<body>
    
   <div class="col-md-4 offset-md-4">
    <h5>Edit Student's Details</h5>
    <form action="form.php" method="POST">
        <input type="hidden" name="student_id" value="<?=$results['id'];?>">

        <div class="form-group">
        <input type="text" placeholder="Enter firstname" name="firstname" class="form-control" value="<?=$results['firstname'];?>"><br>
        </div>

        <div class="form-group">
        <input type="text" placeholder="Enter lastname" name="lastname" class="form-control" value="<?=$results['lastname'];?>"><br>
        </div>

        <div class="form-group">
        <input type="text" placeholder="Enter email here" name="email" class="form-control" value="<?=$results['email'];?>"><br>
        </div>

        <div class="form-group">
        <input type="text" placeholder="Enter course" name="course" class="form-control" value="<?=$results['course'];?>"><br>
        </div>

        

        <button name="update_student"  class="btn btn primary" >Update</button>


    </form>

   </div>

</body>
</html>