<?php

/**
 * Lists all Textpattern CMS tag attributes used in taghandlers.php
 * by Jukka Svahn
 * http://rahforum.biz
 *
 * @name rah_attList
 * @author Jukka Svahn
 * @url http://rahforum.biz
 * @copyright (c) 2011 Jukka Svahn (http://rahforum.biz)
 *
 * Licensed under GNU Genral Public License version 2
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Lists attributes
 * @param string Path to taghandles.php. If NULL, current directory. 
 * @return array
 */

	function rah_attList($path=NULL) {

		if($path === NULL)
			$path = './taghandlers.php';

		if(!file_exists($path) || !is_file($path) || !is_readable($path))
			die('File does not exists, or is not readable.');

		$file = file_get_contents($path);
		$atts = array();
		$blocks = preg_split("@^\s*(function\s+\w+.*?)$@m", $file, -1, PREG_SPLIT_DELIM_CAPTURE);

		foreach($blocks as $block) {
			if(preg_match('@lAtts\(array\((.*?)\)\s*,\s*\$atts\s*\)\s*\)\s*;@s', $block, $m)) {
				if(preg_match_all("@'\s*(.*?)'\s*=>\s*(.*?)\s*,@s", $m[1], $matches, PREG_SET_ORDER)) {	
					foreach ($matches as $match) {
						$att = preg_replace('/[^A-z0-9]/i', '', $match[1]);
						$atts[$att] = "'".$att."'";
					}
				}
			}
		}

		ksort($atts);
		return $atts;
	}
?>