<?php
class StringProcessor {
	function capitalize($words) {
		return strtoupper($words);
	}

	function capitalizeAlternate($words) {
		$letter_count = 0;
		$result = '';
		for ($i=0; $i<strlen($words); $i++) {
		    if (!preg_match('![a-zA-Z ]!', $words[$i])) {
		        $result .= $words[$i];
		    } else if ($letter_count++ & 1) {
		        $result .= strtoupper($words[$i]);
		    } else {
		        $result .= $words[$i];
		    }
		}
		return $result;
	}

	function createCSVFile($words) {
		$data = str_split($words);
		$fp = fopen("string.csv", 'w');
	  	fputs($fp, implode($data, ',')."\n");
		fclose($fp);
		return "CSV created!";
	}

}

?>