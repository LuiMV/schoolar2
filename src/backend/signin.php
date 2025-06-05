
<?php
    include('../config/database.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        header('Refresh: 0; URL=http://localhost/schoolar2/index.html');
    }

    $email = $_POST['e_mail'];
    $passw = $_POST['p_sswd'];
    $enc_pass = md5($passw);

    $sql = "
        SELECT
            id,
            count(id) as total
        FROM 
            users
        WHERE
            email = '$email' and
            password = '$enc_pass' and
            status = true
    ";

    $res = pg_query($conn,$sql);
    
    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total'] > 0){
           // echo"Email already exist";
           $_SESSION['user_id'] = $row['id'];
           header('Refresh: 0; URL=http://localhost/schoolar2/index.html');
        }else{
            echo "Login failed";
        }
    }
?>