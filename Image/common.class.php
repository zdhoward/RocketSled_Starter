<?php
	class Common
	{
		// Testing
		public function SayHello()
		{
			echo "Hello World!".PHP_EOL;
		}
		
		// HTML
		public function FormatHeader($title)
		{
			echo "<head>".PHP_EOL;
			echo "<title>".$title."</title>".PHP_EOL;
			echo "</head>".PHP_EOL;
		}
	}
?>