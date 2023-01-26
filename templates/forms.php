<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<?php include ('dbh.php');?>

    <div class="col-md-4 offset-md-4">
     <h2>Enter student details</h2>
     <form action="crud.php  " method="POST">
    <div class="form-group"> 
       <input type="text" name="firstname" placeholder=" Enter firstname" class="form-control"
       value="<?php echo htmlspecialchars($firstname);?>">
       <div class="text-danger"><?php echo $errors['firstname'];?></div>
     </div>


     <div class="form-group"> 
       <input type="text" name="lastname" placeholder=" Enter lastname" class="form-control"
       value="<?php echo $lastname;?>">
       <div class="text-danger"><?php echo $errors['lastname'];?></div> 
     </div>


     <div class="form-group"> 
       <input type="text" name="email" placeholder=" Enter email" class="form-control"
       value="<?php echo $email;?>">
       <div class="text-danger"><?php echo $errors['email'];?></div>
     </div>


     <div class="form-group"> 
       <input type="text" name="course" placeholder=" Enter course" class="form-control"
       value="<?php echo $course;?>">
       <div class="text-danger"><?php echo $errors['course'];?></div>
     </div>
    

     <button name="save" class="btn btn primary"> Save Details</button>
   </form>
    </div>
    

</body>
</html>

<?php  

$firstname =$lastname = $email= $course ='';
$errors =array('fiestname'=>'','lastname'=>'','email'=>'','course'=>'');

if(isset($_POST['save'])){  
    //cheking for firstname validation
    if(empty($_POST['firstname'])){
        $errors['firstname'] = 'firstname cannot be empty <br>';
    }else{
        //echo $_POST ['firstname];
        // echo $_POST ['course]
        $firstname = $_POST['firstname'];
        if(!preg_match('/^[a-zA-Z\s] +$/', $firstname)){
            $errors['firstname'] = 'firstname must be letters and spaces only <br>';
        }
    }
    //cheking for lastname validation
    if(empty($_POST['lastname'])){
        $errors['lastname'] = 'lastname cannot be empty <br>';
    }else{
        $lastname = $_POST['lastname'];
        if(!preg_match('/^[a-zA-Z\s] +$/', $lastname)){
            $errors['lastname'] = 'lastname must be letters and spaces only';
        }
    }
    //cheking for course validation
    if(empty($_POST['course'])){
        $errors['course'] = 'course cannot be empty <br>';
    }else{
        //echo $_POST['course]
        $course = $_POST['course'];
        if(!preg_match('/^[a-zA-Z\s] +$/', $course)){
            $errors['course'] = 'course must be letters and spaces only';
        }
    }
    
    if(empty($_POST['email'])){
        $errors['email'] = 'email cannot be empty <br>';
    }else{
        //echo $_POST['course]
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors['email'] = 'email must be a vaild email adress';
        };
    }

     if(array_filter($errors)){
        echo'There are errors in the form';
     }else{ 
        echo'No errors in the form';
        $statement = $databaseConnection->prepare(
            "INSERT INTO sample(firstname,lastname, email,course)
            VALUES($firstname,$lastname, $email,$course)");
        $statement->execute();}
            try
            {
                $query = "INSERT INTO sample(firstname,lastname, email,course,))VALUES(:firstname, :lastname, :email, :course)";
                $query_run = $databaseConnection->prepare($query);
                $data = [
                    ':firstname' =>$firstname,
                    ':lastname' => $lastname,
                    ':email' => $email,
                    ':course' => $course,
            ] ;
            $query_execute =$query_run-> execute($data);
            if($query_exacute){
                echo '<script> alert("Data added Succeffully")<script>' ;
            }else{
                //echo'<script>alert ("Data NOT added")</script>;
     }
    }catch(PDOException $err){
        echo $err->getmessage();
    }
     ?>
     