<?php
 
$strAccessToken = "zTxczg8ur8t0cFhBMcIsrREKvAqmILRdeETbo6PmsbQLHx/eoJHEqi8K53y+LCvCJgWt87p1r0xDBt6tctVhAZI9/twiQL/Xb6wbYKxfrhVYu1cceEmNZh4lan+qNl1EmNIo241+uVaQBvYs9llIkwdB04t89/1O/w1cDnyilFU=";
 
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
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "สวัสดีคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "สวัสดีครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "สวัสดีคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "หวัดดีครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "ดีคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "ดีครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "หวัดดีค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "หวัดดีคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "ดีค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "ดีคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
 }else if($arrJson['events'][0]['message']['text'] == "หวัดดีคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียนเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียนเรียนยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียนเรียนยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียนเรียนยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียนเรียนยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "จะลงทะเบียนยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "จะลงทะเบียนยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "จะลงทะเบียนยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "จะลงทะเบียนยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "จะลงทะเบียนยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "วิธีการลงทะเบียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "วิธีการลงทะเบียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
  }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
  }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
  }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนเรียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนเรียนไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนเรียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงทะเบียนเรียนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงเรียน GE"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGE"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGEยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGEยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGEยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGEยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงวิชาGEยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงGEไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงGEไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงGEไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงGEไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงวิชาGEไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงวิชาGEไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงวิชาGEไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงวิชาGEไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงเรียนวิชาGEไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงเรียนวิชาGEไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงเรียนวิชาGEไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีการลงเรียนวิชาGEไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "หนูจะลงเรียนวิชาGEยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "หนูจะลงเรียนวิชาGEยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ผมจะลงเรียนวิชาGEยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ผมจะลงเรียนวิชาGEยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "รายวิชาที่เปิดสอน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชา"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "วันนี้เปิดให้บริการไหม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "วันนี้เปิดให้บริการไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "วันนี้เปิดให้บริการไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "วันนี้เปิดให้บริการไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "วันนี้เปิดให้บริการไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการไหม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการอยู่ไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการอยู่ไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการอยู่ไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "ตอนนี้เปิดให้บริการอยู่ไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีเปิดหมู่เรียนพิเศษไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีเปิดหมู่เรียนพิเศษไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีเปิดหมู่เรียนพิเศษไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะยกเลิกวิชาเรียนยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะยกเลิกวิชาเรียนยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะยกเลิกวิชาเรียนยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะยกเลิกวิชาเรียนยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะยกเลิกวิชาเรียนยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะถอนวิชาเรียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะถอนวิชาเรียนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะถอนวิชาเรียนไหมค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะถอนวิชาเรียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "จะถอนวิชาเรียนไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == ""){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
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
