<?php 
require 'vendor/autoload.php';
require 'libs/NotORM.php'; 
//membuat dan mengkonfigurasi slim app
$app = new \Slim\app;

// konfigurasi database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_trayek';
$dbmethod = 'mysql:dbname=';

$dsn = $dbmethod.$dbname;
$pdo = new PDO($dsn, $dbuser, $dbpass);
$db  = new NotORM($pdo);

// mendefinisikan route app di home
$app-> get('/', function(){
    echo "Hello World by slimteknorial";
});
// tambah produk baru
$app->post('/produk1', function($request, $response, $args) use($app, $db){
    $produk = $request->getParams();
    $result = $db->pemohon->insert($produk);
    echo json_encode(array(
        "status" => (bool)$result,
        ));
});
//menghapus produk
// $app->delete('/produk/{id}', function($request, $response, $args) use($app, $db){
//     $produk = $db->produk()->where('id_produk', $args);
//     if($produk->fetch()){
//         $result = $produk->delete();
//         echo json_encode(array(
//             "status" => true,
//             "message" => "Produk berhasil dihapus"));
//     }
//     else{
//         echo json_encode(array(
//             "status" => false,
//             "message" => "Produk id tersebut tidak ada"));
//     }
// });
//run App
$app->run();
