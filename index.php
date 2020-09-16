<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

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

  // var_dump(strlen($name));
  // var_dump(is_numeric($age));
  // var_dump(strpos($mail,'.'));
  echo $text;

?>
