<?php
	class FindDist{

		function __construct($type,$dist) {

			$this->type = $type;
			$this->dist = floatval($dist);

		}

		function convert_dist(){

			if ($this->type == "1") {
				$conversion = 1.60934 * $this->dist;
			}else{
				$conversion = 0.621371 * $this->dist;
			}

			return $conversion;

		}
	}