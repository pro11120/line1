<?php
$API_URL = 'https://api.line.me/v2/bot/message/reply';
$ACCESS_TOKEN = 'j9c3KJKt2+3aoVnyTtp1yJm9lnpzsuRb+nz87EkXGY48+5r8KX/8LcUmj3ZRDXfgz7GqXnp7//BYAWTdnOmNmLigr8y/Utq3/zurwITjzPX/X5M7JYtr7ePEsT0+bRe887TccsbZOOZ+DoK7IaQFxQdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array
foreach ($events as $event) {

  // Postback Event
  if (($event instanceof \LINE\LINEBot\Event\PostbackEvent)) {
    $logger->info('Postback message has come');
    continue;
  }
  // Location Event
  if  ($event instanceof LINE\LINEBot\Event\MessageEvent\LocationMessage) {
    $logger->info("location -> ".$event->getLatitude().",".$event->getLongitude());
    continue;
  }

  // Message Event = TextMessage
  if (($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
    $messageText=strtolower(trim($event->getText()));
    switch ($messageText) {
    case "text" : 
      $outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("text message");
      break;
    case "location" :
      $outputText = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder("Eiffel Tower", "Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France", 48.858328, 2.294750);
      break;
    case "button" :
      $actions = array (
        // general message action
        New \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder("button 1", "text 1"),
        // URL type action
        New \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("Google", "http://www.google.com"),
        // The following two are interactive actions
        New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("next page", "page=3"),
        New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Previous", "page=1")
      );
      $img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
      $button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder("button text", "description", $img_url, $actions);
      $outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
      break;
    case "carousel" :
      $columns = array();
      $img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
      for($i=0;$i<5;$i++) {
        $actions = array(
          new \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("Add to Card","action=carousel&button=".$i),
          new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder("View","http://www.google.com")
        );
        $column = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("Title", "description", $img_url , $actions);
        $columns[] = $column;
      }
      $carousel = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder($columns);
      $outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("Carousel Demo", $carousel);
      break;  
    case "image" :
      $img_url = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
      $outputText = new LINE\LINEBot\MessageBuilder\ImageMessageBuilder($img_url, $img_url);
      break;  
    case "confirm" :
      $actions = array (
        New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("yes", "ans=y"),
        New \LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder("no", "ans=N")
      );
      $button = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder("problem", $actions);
      $outputText = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder("this message to use the phone to look to the Oh", $button);
      break;
    default :
      $outputText = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("demo command: text, location, button, confirm to test message template");  
      break;
    }
    $response = $bot->replyMessage($event->getReplyToken(), $outputText);
  }

}  
?>
