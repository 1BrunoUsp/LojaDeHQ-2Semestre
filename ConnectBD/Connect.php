<?php

if(!$con = mysqli_connect('localhost','root','','bd_hq')){
    echo "Error de acesso ao banco de dados!!!";
}
mysqli_query($con, "SET NAMES utf8");

