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
   <div class="col-md-4 offset-md-4">
    <h5>Edit Student's Details</h5>
    <form action="crud.php" method="POST">
        <input type="hidden" name="student_id" value="<?$results['id'];?>">

        <div class="form-group">
        <input type="test" name="firstname" value="<?$results['firstname'];?>" placeholder="Enter firstname" class="form-control">
        </div>

        <div class="form-group">
        <input type="test" name="lastname" value="<?$results['lastname'];?>" placeholder="Enter lastname" class="form-control">
        </div>

        <div class="form-group">
        <input type="test" name="email" value="<?$results['email'];?>" placeholder="Enter email" class="form-control">
        </div>

        <div class="form-group">
        <input type="test" name="course" value="<?$results['course'];?>" placeholder="Enter course" class="form-control">
        </div>

        <button name="Delete_details" class="btn btn prrimary">Update <Details></Details></button>


    </form>

   </div>

</body>
</html>