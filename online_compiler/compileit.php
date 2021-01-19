<?php
$url = "https://api.jdoodle.com/v1/execute";    
$obj = new \stdClass();
$obj->clientId = "{id_here}";
$obj->clientSecret = "{secret_here}";
$myfile = fopen("code.txt", "w") or die("Error");
fwrite($myfile, $_POST['code']);
fclose($myfile);
$obj->script=file_get_contents('code.txt');

$obj->stdin=$_POST['inputs'];
$obj->language=$_POST['lang'];
$obj->versionIndex=0;
$content = json_encode($obj);
//echo json_encode("<ghj ");
//echo $content;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

/*if ( $status != 201 ) {
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}*/

curl_close($curl);
$json = json_decode($json_response);
echo $json->output;
//echo $json_response;

/*
$response = json_decode($json_response, true);
echo $response;
*/
?>