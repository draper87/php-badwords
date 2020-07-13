<?php

  // dichiaro la mia variabile di testo
  $stringa_di_testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  // passo al server la parola da censurare
  $badword = $_GET["parola"];

  // la sostituisco con tre asterischi
  $asterischi = '***';

  // uso la funzione str_replace per rimpiazzare la parola da censurare con tre asterischi
  $stringa_da_visualizzare = str_replace($badword, $asterischi, $stringa_di_testo);

  // uso var_dump per visualizzare la stringa corretta insieme alla relativa lunghezza
  var_dump($stringa_da_visualizzare);

 ?>
