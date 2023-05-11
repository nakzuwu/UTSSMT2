<?php
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL=>'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION=> CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST=> 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width="100%">
            <thead>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>HARGA BARANG</th>
                <th>QUANTITY</th>
                <th>TOTAL ASET</th>
            </thead>
            ';
foreach ($response_array as$resp){
    if($resp['g_code'][0] === "8"){
        $onscreen.='<tr>
                <td>'.$resp['i_code'].'</td>
                <td>'.$resp['i_name'].'</td>
                <td>'.$resp['i_sell'].'</td>
                <td>'.$resp['i_qty'].'</td>
                <td>'.$resp['i_cogs'].'</td>
                </tr>';
    }
}
$onscreen.='</table>';
echo $onscreen;     
?>

//saya sudah berusaha semaksimal mungkin, namun di local host saya tetap tidak muncul;