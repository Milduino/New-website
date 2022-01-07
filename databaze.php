<?
$db_spojeni = mysql_connect("sql2.webzdarma.cz", "dataxfcz4079","EeWV9B7")
or die (mysgl_error());
$db_vysledek = mysql_select_db("dataxfcz4079",$db_spojeni)
or die (mysql_error()) ;
?>                            