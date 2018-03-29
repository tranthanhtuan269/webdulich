<?php

namespace App\Http\Helper;

/**
* 
*/
class Helper
{
	
	function __construct()
	{
		
	}

	public static function removeSpace($output){
        $output = str_replace(array("\r\n", "\r"), "\n", $output);
        $lines = explode("\n", $output);
        $new_lines = array();

        foreach ($lines as $i => $line) {
            if(!empty($line))
                $new_lines[] = trim($line);
        }
        return implode($new_lines);
    }
}