<?php
	class FindTemp{

		function __construct($type,$temp) {

			$this->$type = ($type);
			$this->$temp = floatval($temp);

		}


		function convert_temp() {
			if ($type == "1") {
				$conversion = (5*($temp - 32))/9;
			}
			else{
				$conversion = (((9*$temp)/5) + 32);
			}
		

			return $conversion;
		}

	}

?>