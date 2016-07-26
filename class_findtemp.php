<?php
	class FindTemp{

		function __construct($type,$temp) {

			$this->type = $type;
			$this->temp = floatval($temp);

		}


		function convert_temp() {
			if ($this->type == "1") {
				$conversion = (5*($this->temp - 32))/9;
			}
			else{
				$conversion = (((9 * $this->temp)/5) + 32);
			}
		

			return $conversion;
		}

	}

?>