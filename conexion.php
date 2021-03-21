<?php

    function conect(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $bd = "datos";

        $conexion = new mysqli($server,$user,$password,$bd);

        if($conexion->connect_errno){
            die("error".$conexion->connect_errno);
        }
        else{
            return $conexion;
        }
    }



?>