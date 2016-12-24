<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim(); $app->get('/', function () use ($app) {
  require_once 'lib/mysql.php';
  $db = connect_db();
  $result = $db->query( 'SELECT * FROM trayek WHERE dari_tanggal BETWEEN '20161204' and '20161205';' );
  while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
    $data[] = $row;
  }

  $app->render('friends.php', array(
      'page_title' => "Your Friends",
      'data' => $data
    )
  );
});

$app->run();
 
function connect_db() {
  $server = 'localhost'; // this may be an ip address instead
  $user = 'user';
  $pass = 'pass';
  $database = 'slim_db';
  $connection = new mysqli($server, $user, $pass, $database);

  return $connection;
}
 
?>