<?php
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');
define('DB_NAME', 'royalmovers');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

mysqli_set_charset($dbc, 'utf8');

function escape_data($data)
{
   global $dbc;
   
   if(get_magic_quotes_gpc())
   {
      $data = stripslashes($data);
   }
   
   return mysqli_real_escape_string(trim($data), $dbc);
}
