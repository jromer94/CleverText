<?php

  require_once('/home/a5842996/public_html/chatterbotapi.php');

  $factory = new ChatterBotFactory();

	$bot = $factory->create(ChatterBotType::CLEVERBOT);
  $botSession = $bot->createSession();

	$text = $_POST["body"];

	$text = $botSession->think($text);

	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>

<Response>
	<Sms><?php echo $text?></Sms>
</Response>

