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
}else if($arrJson['events'][0]['message']['text'] == "HI"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "Hi"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "hi"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "HELLO"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "Hello"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีค่ะสำนักงานส่งเสริมวิชาการและงานทะเบียนยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "hello"){
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
}else if($arrJson['events'][0]['message']['text'] == "ขั้นตอนการลงทะเบียนเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนเรียนไหม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "มีขั้นตอนการลงทะเบียนไหมค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำไงค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไงค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนทำอย่างไรค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
 }else if($arrJson['events'][0]['message']['text'] == "ลงเรียนGE"){
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
}else if($arrJson['events'][0]['message']['text'] == "GE"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "จีอี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอียังไงค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงเรียนจีอียังไงค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไงค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "reg.npru.ac.th/registrar/home.asp";
}else if($arrJson['events'][0]['message']['text'] == "ลงวิชาจีอีอย่างไรคะ"){
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
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้างครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้างคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้างค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้างค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาไหนเปิดสอนบ้างคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้างครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้างคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้างค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้างค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "http://reg2.npru.ac.th/registrar/class_info.asp?backto=student&avs273866412=15";
}else if($arrJson['events'][0]['message']['text'] == "มีวิชาเรียนไหนเปิดสอนบ้างคะ"){
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
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเวลาไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เปิดให้บริการตั้งแต่
วันจันทร์ถึงวันศุกร์และวันอาทิตย์
ตั้งแต่เวลา 08.30 - 16.30 น
ปิดให้บริการวันเสาร์และวันหยุดนักขัตฤกษ์";
}else if($arrJson['events'][0]['message']['text'] == "เปิดให้บริการช่วงไหนคะ"){
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
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชาเรียนอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "ยกเลิกวิชา"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่มคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่มค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่มค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่มคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่มครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์ล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
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
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำยังไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
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
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำยังไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไงครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไงคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไงค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไงค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไงคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ทำอย่างไรครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไรคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไรค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไรค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ทำอย่างไรคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มทำไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มเข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บล่มเข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บเข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์เข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์เข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์เข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์เข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เว็บไซต์เข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบเข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์เข้าไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์เข้าไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์เข้าไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์เข้าไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์เข้าไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่ม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่มครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่มคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่มค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่มค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
 }else if($arrJson['events'][0]['message']['text'] == "เวบไซต์ล่มคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเวบไซต์ไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เข้าเว็บไซต์ไม่ได้คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
}else if($arrJson['events'][0]['message']['text'] == "เวบล่มคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาCopyลิงก์ด้านล่างแล้วนำไปวางในช่องค้นหาเว็บเบราว์เซอร์
( reg2.npru.ac.th/registrar/login.asp?avs1014185221=15 )";
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
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "สมัครเรียนตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดสมัครเรียนตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "รับสมัครเรียนตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3891";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมเดือนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเทอมช่วงไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
 }else if($arrJson['events'][0]['message']['text'] == "เปิดเรียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนตอนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนวันไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนเดือนไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "เปิดเรียนช่วงไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถติดตามข่าวสารได้ที่ : http://ac.npru.ac.th/";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้างครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้างคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้างค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้างค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "สามารถจ่ายค่าเทอมได้ที่ไหนบ้างคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่บ้างไหน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนบ้างครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนบ้างคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนบ้างค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนบ้างค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "จ่ายค่าเทอมได้ที่ไหนบ้างคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สามารถจ่ายได้ที่ตึกสำนักงานส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
  หรือ ธนาคารที่เข้าร่วมในใบชำระค่าลงทะเบียน";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ค่าเทอมเท่าไหร่คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอม"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่ครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่คับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่ค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่ค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ราคาค่าเทอมเท่าไหร่คะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาติดต่อที่ตึกสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏนครปฐม 
หรือ โทรศัพท์: 034-109300 ต่อ 3892-3893";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมาก"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุณมากจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมาก"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากครับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากคับ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากค้าบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากค่ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากคะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากค่า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากจ้า"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมากจ้ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
}else if($arrJson['events'][0]['message']['text'] == "ขอบคุนมาจ๊ะ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ยินดีให้บริการค่ะ";
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
