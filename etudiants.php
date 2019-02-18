<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="etudiants.php"></script>
</head>
<body>
        <form action="etudiants.php" method="get">
                <p>
                        
                        <input type="text" name="prenom" /><br />
                        <input type="submit" value="OK" />
                </p>
        </form>
</body>
</html>


<?php

$prenom=$_GET['prenom'];

function geEtetudiants($prenom) {
    $connec = new PDO("mysql:dbname=ajax", 'root', '1234');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM Etudiants WHERE prenom like%Get_['prenom'];");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

  $requete = getEtudiants($prenom);

?> 
