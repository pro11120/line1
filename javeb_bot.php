<?php
$strAccessToken = "zTxczg8ur8t0cFhBMcIsrREKvAqmILRdeETbo6PmsbQLHx/eoJHEqi8K53y+LCvCJgWt87p1r0xDBt6tctVhAZI9/twiQL/Xb6wbYKxfrhVYu1cceEmNZh4lan+qNl1EmNIo241+uVaQBvYs9llIkwdB04t89/1O/w1cDnyilFU=";
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$strUrl = "https://api.line.me/v2/bot/message/reply";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
if($arrJson['events'][0]['message']['text'] == "สวัสดีค่ะ","สวัสดีครับ","หวัดดีครับ","สวัสดีคับ","สวัสดีคะ","ดีคับ","ดีครับ","ดีค่ะ","ดีคะ","หวัดดีค่ะ","หวัดดีคะ","หวัดดีคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะ ต้องการสอบถามข้อมูลเบื้องต้นเกี่ยวกับเรื่องไหนคะ";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สิบบาท";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
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
