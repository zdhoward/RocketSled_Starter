<?php
	include 'common.class.php';
	
	class DisplayImages implements RocketSled\Runnable
	{
		public function run()
		{
			Common::FormatHeader("Welcome to My Site");
			echo "Images:".PHP_EOL;
			echo "<br /><img src = '../Data/Images/01.jpg'><br />".PHP_EOL;
			Common::SayHello();
		}
		
	}
?>
