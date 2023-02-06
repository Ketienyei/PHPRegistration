<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>  
<body>
    <?php
    if (empty($email)){
        header("Location: login.php?error=[emailis required");
    }else{
        $statement =$databaseconnection->prepare("SELECT *FROM users WHERE email=?");
        $statement->execute ([$email]);

        if($statement->rowCount()===1){ 
            $user =$statement->fetch();
             
            $userId =$user['id'];
            $userEmail =$user['email'];
            $userPassword =$user['password'];
            $userFullname =$user['Fullname'];

            if($email === $userEmail){ 
                if($password === $userPassword){
                    $_SESSION['id']= $userId;
                    header("Location: students.php");
                }else{
                    header("Location: login.php?erorr=Incorrect Username or Password");
                }
            }else{
                header("Location: login.php?erorr=Incorrect Username or Password");
            }
        }else{
            header("Location: login.php?erorr=Incorrect Username or Password");
        }
    }
            
?>
</body>
</html>