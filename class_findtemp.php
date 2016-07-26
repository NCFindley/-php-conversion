<?php
	class FindTemp{

		function __construct($type,$temp) {

			$this->type = $type;
			$this->temp = $temp;

		}


		function convert_temp {
			if ($type == "1") {
				$conversion = (5*(Float(@temp) - 32))/9;
			}
			else{
				$conversion = (((9*Float(@temp))/5) + 32);
			}
		

			return $conversion
		}

	}

?>