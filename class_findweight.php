<?php
	class FindWeight{

		function __construct($type,$weight) {

			$this->type = $type;
			$this->weight = floatval($weight);

		}
		function convert_weight() {
			if ($this->type == "1"){

				$stone = $this->pound_to_stone();
				$kg = $this->pound_to_kg();

				$conversion = "Stones: " . $stone . " Kilograms " . $kg;


			}elseif ($this->type == "2") {
				
				$pound = $this->kg_to_pound();
				$stone = $this->kg_to_stone();

				$conversion = "Pounds " . $pound . " Stones " . $stone;
			}
			elseif ($this->type == "3") {

				$pound = $this->stone_to_pound();
				$kg = $this->stone_to_kg();

				$conversion = "Pounds " . $pound . " Kilograms " . $kg;
			}


			return $conversion;
		}



		function pound_to_stone(){

		$stone =  $this->weight / 14;
		return $stone;

		}

		function pound_to_kg(){

			$kg = $this->weight * (1 / 2.2046226218);

			return $kg;

		}

		function kg_to_pound(){

			$pound = $this->weight * 2.2046;

			return $pound;

		}

		function kg_to_stone(){

			$stone = $this->weight / 6.35029318;
			return $stone;
		}

		function stone_to_pound(){

			$pound = $this->weight * 14;
			return $pound;
		}

		function stone_to_kg(){

			$kg = $this->weight * 6.35029318;
			return $kg;
		}


	}


?>