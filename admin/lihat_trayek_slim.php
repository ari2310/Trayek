<?php
include("koneksi.php");
$app ->get('/semuaproduk', function() use($app, $db){
    foreach($db->trayek() as $data){
        $produk[] = array(
            'kode_trayek' => $data['kode_trayek'],
            'nama' => $data['nama'],
            'jarak' => $data['jarak'],
            'lintasan' => $data['lintasan'],
            'tanggal_berlaku' => $data['tanggal_berlaku'],
            );
    }
    echo json_encode($produk);
});
// $app ->get('/semuaproduk/{id}', function($request, $response, $args) use($app, $db){
//     $produk = $db->motor()->where('id_produk',$args['id']);
//     if($data = $produk->fetch()){
//         echo json_encode(array(
//             'id_produk' => $data['id_produk'],
//             'no_plat' => $data['no_plat'],
//             'tgl' => $data['tgl'],
//             'jam' => $data['jam'],
//             'lama' => $data['lama'],
//             'hgperjam' => $data['hgperjam'],
//             'tt_bayar' => $data['tt_bayar']
//             ));
//     }
//     else{
//         echo json_encode(array(
//             'status' => false,
//             'message' => "Nomor Plat Tidak Ada"
//             ));
//     }
// });
$app->run();