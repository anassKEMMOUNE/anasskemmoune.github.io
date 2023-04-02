<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="pres">
    <h1>To-Do List</h1>
    <h4>By Ilyas BOUDHAINE & Anass KEMMOUNE</h4>

    <div class="log_btn_grp">
    <button class="log_btn">Login</button>
    <button class="reg_btn">Register</button>
    </div>
    </div>



    <form class ="login_form" action="" method="post">
        <label for="email_log">Email</label>
        <input type="email" name="email_log" id="email_log" required>
        <label for="pass_log">Password</label>
        <input type="password" name="pass_log" id="pass_log" required>
        <input type="submit" value="Login">
    </form>
    <form class ="register_form" action="" method = "post">
    <label for="user_reg">Username</label>
        <input type="text" name="user_reg" required>
        <label for="email_reg">Email</label>

        <input type="email" name="email_reg" id="email_reg" required>
        <label for="pass_reg">Password</label>

        <input type="password" name="pass_reg" id="pass_reg" required>

        <input type="submit" value="Register">
    </form>

    <?php 

    include_once __DIR__.'/Includes/dbh.inc.php';

    if (array_key_exists("user_reg", $_POST) && array_key_exists("email_reg", $_POST) && array_key_exists("pass_reg", $_POST)){
        // calculate the new id  
        $old_id_query = "SELECT MAX(user_id) FROM user";
        $res = $conn -> query($old_id_query);
        $ro = $res -> fetch_array(MYSQLI_NUM);
        $new_id = $ro[0]+1;
        echo $new_id;
        echo $_POST["user_reg"];
        $a = $_POST['user_reg'];
        $b = $_POST['email_reg'];
        $c = $_POST['pass_reg'];
        var_dump($a);
        $add_user_query = "INSERT INTO user VALUES ($new_id,'$a','$b','$c')";
        $result = $conn -> query($add_user_query);

    }

    $conn -> close();
   
    ?>
</body>
<script>


</script>
</html>