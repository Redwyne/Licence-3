<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="newrandomcss.css">
  <script src="script.js"></script>
</head>
<body>
  
<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Galerie
 *
 * @author 21616011
 */

$bd = new PDO("mysql:host=mysql.info.unicaen.fr;port=3306;dbname=21616011_0;charset=utf8", "21616011","Chelsea1998" );
    //put your code here
$requete='SELECT title,thumb_url FROM images';
$stmt= $bd->query($requete);
$tab=$stmt->fetchALL();
foreach ($tab as $ligne) {
    echo "<div><h3>".$ligne['title']."</h3>\n";
    echo '<img src="' . $ligne['thumb_url'] . '"></div>';
}

?>
</body>
</html>