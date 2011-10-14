<?php

/**
 * Lists all Textpattern CMS tag functions used in taghandlers.php
 * by Jukka Svahn
 * http://rahforum.biz
 *
 * @name rah_tagList
 * @author Jukka Svahn
 * @url http://rahforum.biz
 * @copyright (c) 2011 Jukka Svahn (http://rahforum.biz)
 *
 * Licensed under GNU Genral Public License version 2
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Lists functions
 * @param string Path to taghandles.php. If NULL, current directory. 
 * @return array
 */

	function rah_tagList($path=NULL) {
		
		if($path === NULL)
			$path = './taghandlers.php';
		
		if(!file_exists($path) || !is_file($path) || !is_readable($path))
			die('taghandlers.php file does not exists, or is not readable.');

		include $path;

		$functions = get_defined_functions();

		$ignore = 
			array(
				'rah_tagList',
				'imagefetchinfo',
				'image_format_info',
				'tpt_link',
				'ee',
				'dolabel',
				'formatpermlink',
				'formatcommentsinvite',
				'dopermlink',
				'doarticlehref',
				'filedownloadfetchinfo',
				'file_download_format_info',
				'filedownloadformattime',
			);
		
		$functions['user'] += 
			array(
				'article' => 'article',
				'article_custom' => 'article_custom',
				'else' => 'else',
				'txp_die' => 'txp_die'
			);
		
		foreach($functions['user'] as $func) {
			if(!in_array($func,$ignore))
				$out[$func] = "'".$func."'";
		}
		
		return $out;
	}
?>