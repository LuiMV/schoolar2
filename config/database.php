<?php
    //config conection
    /*
    $host = "aws-0-us-east-1.pooler.supabase.com";
    $port = "6543";
    $dbname = "schopostgresolar";
    $user = "postgres.rhhctlsfzhoonwbqhfrj";
    $password = "unicesmag@@";
    */
    
    $host = "localhost";
    $port = "5432";
    $dbname = "schoolar";
    $user = "postgres";
    $password = "postgres";
    

    //create connection
    $conn = pg_connect("
        host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password 
        ");
    if(!$conn){
        //die ("connection error:" .preg_last_error());
    }else{
        //echo "Succes connection";
    }
    //pg_close();
?>