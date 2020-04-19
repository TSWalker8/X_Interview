<?php
	function readcsv(){
		$count =0;
		$file = fopen('address - address.csv', 'r');
		print_r ("The names are");
		while (($line = fgetcsv($file)) !== false) {
  			if($line[3] == "Ontario" && $count!=0){
  				echo("<br>");
  				print_r($line[0]);
  				print_r(" ");
  				print_r($line[1]);
  			}
  			$count++;
		}
		fclose($file);
		return;

	}
	readcsv();

?>