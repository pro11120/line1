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
}else if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "สวัสดีจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "สวัสดีจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "สวัสดีจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "หวัดดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "หวัดดีจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "หวัดดีจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "หวัดดีจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ดีค้าบ"){
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
}else if($arrJson['events'][0]['message']['text'] == "ดีค่า"){
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
}else if($arrJson['events'][0]['message']['text'] == "ค้นหารายวิชายังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "จะดูรายวิชาที่เปิดสอนยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "จะดูรายวิชาที่เปิดสอนยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "จะดูรายวิชาที่เปิดสอนยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "จะดูรายวิชาที่เปิดสอนยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "จะดูรายวิชาที่เปิดสอนยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีรายวิชาที่เปิดสอนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีรายวิชาที่เปิดสอนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีรายวิชาที่เปิดสอนไหมค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีรายวิชาที่เปิดสอนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีรายวิชาที่เปิดสอนไหมคะ"){
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
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เข้าไม่ได้ทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
https://reg2.npru.ac.th/registrar/login.asp?avs1014185221=15";
}else if($arrJson['events'][0]['message']['text'] == "สอบถาม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถาม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "สอบถามหน่อยจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอสอบถามหน่อยจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
 }else if($arrJson['events'][0]['message']['text'] == "ถามหน่อย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ถามหน่อยจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อย"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "ขอถามหน่อยจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากดปุ่มเมนูเพื่อสอบถามเรื่องที่ต้องทราบ";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
 }else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
 }else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
 }else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
 }else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "เปิดหมู่เรียนพิเศษเมื่อไหร่คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/
  หรือ คลิกที่ปุ่มเมนู ข่าวสารงานทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "มีวิธีดรอปวิชาเรียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ดรอปเรียนทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ทำเรื่องจบอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "เรื่องจบทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
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
