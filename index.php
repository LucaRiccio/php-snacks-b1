<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.  -->

<?php

  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if ((strlen($name) < 4) || (is_numeric($age) == false)){
    $text = 'Accesso negato';
  } else {
      if((strpos($mail,'@') !== false) && (strpos($mail,'.') !== false)){
        $text = 'Accesso Riuscito';
      } else {
        $text = 'Accesso negato';
      }
  }

  echo $text;

?>
