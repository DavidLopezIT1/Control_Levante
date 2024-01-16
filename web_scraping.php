<?php 
/*
$url="https://ocqa.open-eb.io/pruebas/index.php";
$content= file_get_contents($url);

echo ( "<textarea>" . $content . "</textarea>");
//
*/
$urlDestino = 'https://www.netflix.com/co-en/login';
$valoresAEnviar1 = array("a.e.ralejandra@gmail.com");
$valoresAEnviar2 = array("Mom0124*");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlDestino);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($valoresAEnviar1));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);
var_dump($server_output);
/* 
echo http_build_query($data) . "\n";

//

$processLoginURL = 'https://www.netflix.com/home';
$userName = 'a.e.ralejandra@gmail.com';
$password = 'Mom0124*';

$ch = curl_init($processLoginURL);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,"{userLoginId==$userName&password==$password}");

    $res = curl_exec( $ch );
    echo curl_getinfo( $ch, CURLINFO_HTTP_CODE);
    if ( $error = curl_error( $ch ) ) {
        die ($error);
    }
    echo $res;
    curl_close( $ch );

*/



?>