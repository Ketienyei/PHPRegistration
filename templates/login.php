<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content center align-items center " styles="min-height: 100vh">
        <form class="p-5 rounded shadow" styles ="width :30rem" action="auth.php" method="POST">
            <h1 class="text-center pb-5 display-4" >LOGIN</h1>
            <?php 

            //if($isset($_GET['error'])) 
            {?>

            
                <div class="alert alert danger" role="alert">
                    <?$_GET['error']?>
                </div>
                <?php } ?>

    
                <div class="mb-1">
                    <label for="Email" class="form-label">Email Adress</label>
                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-labal">password</label>  
                    <input type="password" class="form-control" name="password" id="Password">
                </div>
                <button type="submit" class="btn btn success">LOGIN</button>


        </form>

    </div>  
</body>
</html>