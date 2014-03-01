<?php
	include 'common.class.php';
	//include '../HelloWorld/say_hello.class.php';
	
	class DisplayImages implements RocketSled\Runnable
	{
		public function run()
		{
			echo "Images:".PHP_EOL;
			echo "<br /><img src = '../Data/Images/01.jpg'><br />".PHP_EOL;
			Common::SayHello();
		}
		
	}
?>