<?php

  $host='localhost';
  $bd='testuballers';
  $login='root';
  $password='';
  //Vous pouvez modifier les variables si besoin.
  try
{
  $pdo = new PDO('mysql:host='.$host.';dbname='.$bd, $login, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
  catch (Exception $e) 
  {
    die ($e->getMessage());
  }
?>