<?php
if ($_POST["submit"]){
$NomUser=verifInput($_POST["fname"]);
$PrenomUser=verifInput($_POST["lname"]);
$MotDePass=verifInput($_POST["pwd"]);
$ConfPassword=verifInput($_POST["cpwd"]);

if(isset($NomUser) and isset($PrenomUser)and isset($MotDePass) and isset($ConfPassword)){
    echo "Inscription réussie ✔";

}
}







function VerifInput($data){
    $verifSpace=trim($data);
    $verifSlash=stripslashes($verifSpace);
    $verifChar=htmlspecialchars($verifSlash);
    return $verifChar;
}
?>