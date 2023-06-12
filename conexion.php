<?php

class conexion{
    
    function conexionf(){
        $dtbase1 = "espcreo";
        $username = "z08ns77noodbjw2887ad";
        $host = "us-east.connect.psdb.cloud";
        $password = "pscale_pw_xsD7treJKxs7JreIwgykoKZvgeyOl507qsO9uzLKQNH";
    
        try {
            $conn = new PDO($host,$dtbase1, $username, $password );
            echo "Se conecto: ";
    
        }   catch(PDOException $exp){
            echo("No se logro conectar,error:exp");
        }

        return $conn;
    }

} 

?>