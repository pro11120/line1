<?php
 
$strAccessToken = "j9c3KJKt2+3aoVnyTtp1yJm9lnpzsuRb+nz87EkXGY48+5r8KX/8LcUmj3ZRDXfgz7GqXnp7//BYAWTdnOmNmLigr8y/Utq3/zurwITjzPX/X5M7JYtr7ePEsT0+bRe887TccsbZOOZ+DoK7IaQFxQdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
function processMessage($update) {
    if($update["result"]["action"] == "buscar.nfe"){
        sendMessage(array(
            "source" => $update["result"]["source"],
            "speech" => "สวัสดีครับ",
            "displayText" => "ดีจ้าว่าไงสบายดีไหม",
            "contextOut" => array()
        ));
    }
}
function sendMessage($parameters) {
    echo json_encode($parameters);
}

/*
 * PEGANDO A REQUISIÇÃO
 */
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
