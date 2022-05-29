<?php
   //var_dump($_POST);

   $objectPdo = new PDO('mysql:host=localhost;dbname=web','aida','foufouna200621302');

   // reparation de la requete d insertion

   $pdoStat = $objectPdo->prepare('INSERT INTO bilan VALUES(:id,:depart_code ,:user_depart,:S_number,:numb,:user_rate,:lev,:cycle,:user_faculty,:user_speciality)');
   
   $pdoStat->bindValue(':id', $_POST['user_id'],PDO::PARAM_STR);
   $pdoStat->bindValue(':depart_code', $_POST['depart_code'],PDO::PARAM_STR);
   $pdoStat->bindValue('user_depart', $_POST['user_depart'],PDO::PARAM_STR);
   $pdoStat->bindValue('S_number', $_POST['S_number'],PDO::PARAM_STR);
   $pdoStat->bindValue(':numb', $_POST['number'],PDO::PARAM_STR);
   $pdoStat->bindValue(':user_rate', $_POST['user_rate'],PDO::PARAM_STR);
   $pdoStat->bindValue(':lev', $_POST['level'],PDO::PARAM_STR);
   $pdoStat->bindValue(':cycle', $_POST['cycle'],PDO::PARAM_STR);
   $pdoStat->bindValue(':user_faculty', $_POST['user_faculty'],PDO::PARAM_STR);
   $pdoStat->bindValue(':user_speciality', $_POST['user_speciality'],PDO::PARAM_STR);

   $insertisok = $pdoStat->execute();

   if($insertisok){
       $mssg = 'le cantact a ete ajouter a la bdd';}
       else{

        $mssg = 'echec dinsertion';

       }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>insertion a la base de donne</h1>

    <p><?php echo $mssg; ?> </p>
    
</body>
</html>