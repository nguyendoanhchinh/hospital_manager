<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <h5 class="text-dark">Hospital Manager System</h5>

        <div class="mr-auto"> </div>

        <ul class="navbar-nav">
           <?php
            if(isset($_SESSION['admin'])){
                $user=$_SESSION['admin'];
                echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>
                
                ';
            }else{
                echo'
                 <li class="nav-item"><a href="admin.php" class="nav-link text-dark ">Admin  | </a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Doctor  | </a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>
                ';
            }
           ?>
        </ul>
    </nav>
</body>
</html>