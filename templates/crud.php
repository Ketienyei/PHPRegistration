<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST ["delete_student"])){
    $student_id = $_POST['delete_student'];

    try{
        $query = "DELETE FROM studentsdetails WHERE Id=:stud_id";
        $statement =$databaseConnection->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];
        $statement->execute($data);
        $query_execute = $statement->execute($data);
        if ($query_execute){
            echo'<script> alert("Are you sure you want to delete")</script>';
            header('location:students.php');
        
        }else{
            
        }
        }catch(PDOExeption $err){
            echo $err->getMessage();
        }
    }
    if (isset($_POST["update_student"])){
        $student_id =htmlspecialchars($_POST['student_id']);
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];
        $course =$_POST['course'];

        try{
            $query ="UPDATE studentsdetails SET firstname=:firstname, lastname=:lastaname, email=:email, course=:course";
            $data = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'course' => $course,
                'stud_id' => $student_id
            ];
            $query_execute = $statement->execute($data);
            if($query_execute){

            };
        
        }
    
        ?>
    
</body>
</html>



