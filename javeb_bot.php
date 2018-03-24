<?php
 
$strAccessToken = "vSgDomCOuIUA4kwWL4DWy1eqp2vZDmQ6IMj0/EDRIfQ43wtE41+n1SWH6mTTrqzlJgWt87p1r0xDBt6tctVhAZI9/twiQL/Xb6wbYKxfrhU8KMkPrgzZz4b72fzobyyMT4n8p1XKy4dGxqzQWZ9xKwdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดีค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ลงGEผิดจะแก้ยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "นำบัตรประจำตัวนักศึกษามาที่ตึกสำนักงานทะเบียนแล้วมาติดต่อที่เจ้าหน้าที่นะคะ";
}else if($arrJson['events'][0]['message']['text'] == "ลงGEผิดจะแก้ยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "นำบัตรประจำตัวนักศึกษามาที่ตึกสำนักงานทะเบียนแล้วมาติดต่อที่เจ้าหน้าที่นะคะ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
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
