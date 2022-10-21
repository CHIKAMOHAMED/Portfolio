<?php
$maConnexion = odbc_connect ("data", "", ""); //crée une connexion au lien ODBC "Gestion_Commande"
$req = "<select* from clients";   // paramétrage de la requête
$result = odbc_exec ($maConnexion, $req);  // envoie le résultat de la requête dans le recordset
Resultats de la requête :   echo ($req); 
while (odbc_fetch_row($result) == TRUE) // tant qu'il y a une ligne dans le recordset
{
  for ($i=1; $i <= odbc_num_fields($result); $i++)
  {
    $champ = odbc_field_name($result,$i);
    $val = odbc_result ($result, $champ);
    echo ($val);
    echo " ";
   }
  echo " ";
}
odbc_free_result($result);
odbc_close($maConnexion);
?>
 