<?php
	require 'chatterbotapi';

	$factory = new ChatterBotFactory();

	$bot = $factory->create(ChatterBotType::CLEVERBOT);

	$text = $_POST["body"];

	$text = $bot->think($text);

	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>

<Response>
	<Sms><?php echo $text?></Sms>
</Response>

