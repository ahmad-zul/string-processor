<?php
class StringProcessor {
	function capitalize($string) {
		$string = trim($string);
		if (strlen($string) > 0) {
			return strtoupper($string);
		}
		return 'No string passed';
	}

	function capitalizeAlternate($string) {
		$string = trim($string);
		if (strlen($string) > 0) {
			$letter_count = 0;
			$result = '';

			for ($i=0; $i<strlen($string); $i++) {
			    if (!preg_match('![a-zA-Z ]!', $string[$i])) {
			        $result .= $string[$i];
			    } else if ($letter_count++ & 1) {
			        $result .= strtoupper($string[$i]);
			    } else {
			        $result .= $string[$i];
			    }
			}

			return $result;
		}
		return 'No string passed';
	}

	function createCSVFile($string) {
		$string = trim($string);
		if (strlen($string) > 0) {
			$data = str_split($string);
			$file = fopen("string.csv", 'w');
		  	fputs($file, implode($data, ','));
			fclose($file);
			return "CSV created!";
		}
		return 'No string passed';
	}

}

?>