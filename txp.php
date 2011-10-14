<?php
/**
 * Textpattern Tag language file for GeSHi
 * by Jukka Svahn
 * http://rahforum.biz
 *
 * @author Nigel McNie
 * @author Christian Weiske
 * @author Jukka Svahn
 * @copyright (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * @copyright (c) 2011 Jukka Svahn (http://rahforum.biz)
 *
 * Licensed under GNU Genral Public License version 2, or
 * (at your option) any later version.
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

$language_data = array (
	'LANG_NAME' => 'TXP',
	'COMMENT_SINGLE' => array(),
	'COMMENT_MULTI' => 
		array(
			'<txp:hide>' => '</txp:hide>',
			'<!--' => '-->'
		),
	'COMMENT_REGEXP' => array(),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '',
	'KEYWORDS' => array(
		/*
			HTML5 tags
		*/
		0 => 
			array(
				'a', 'abbr', 'address', 'article', 'aside', 'audio', 'base', 'bdo', 
				'blockquote', 'body', 'br', 'button', 'b', 'caption', 'cite', 'code', 
				'colgroup', 'col', 'canvas', 'command', 'datalist', 'details', 'dd', 
				'del', 'dfn', 'div', 'dl', 'dt', 'em', 'embed','fieldset', 'form', 
				'figcaption', 'figure', 'footer', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 
				'head', 'hr', 'html', 'header', 'hgroup', 'iframe', 'ilayer', 'img', 
				'input', 'ins', 'isindex', 'i', 'kbd', 'keygen', 'label', 'legend', 
				'link', 'li', 'map', 'meta', 'mark', 'meter', 'noscript', 'nav', 
				'object', 'ol', 'optgroup', 'option', 'output', 'param', 'pre', 'p', 
				'progress', 'q', 'rp', 'rt', 'ruby', 'samp', 'script', 'select', 'small', 
				'span', 'strong', 'style', 'sub', 'sup', 's', 'section', 'source', 
				'summary','table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 
				'title', 'thead', 'th', 'tr', 'time','ul','var', 'video','wbr',
			),
		/*
			TXP tags
		*/
		1 => 
			array(
				'page_title', 'css', 'image', 'thumbnail', 'output_form', 'yield',
				'feed_link', 'link_feed_link', 'linklist', 'linkdesctitle', 
				'link_name', 'link_url', 'link_author', 'link_description', 'link_date', 
				'link_category', 'link_id', 'link_format_info', 'email', 
				'password_protect', 'recent_articles', 'recent_comments', 'related_articles', 
				'popup', 'category_list', 'section_list', 'search_input', 'search_term', 
				'link_to_next', 'link_to_prev', 'next_title', 'prev_title', 'site_name', 
				'site_slogan', 'link_to_home', 'newer', 'older', 'text', 'article_id', 
				'article_url_title', 'if_article_id', 'posted', 'expires', 'if_expires', 
				'if_expired', 'modified', 'comments_count', 'comments_invite', 
				'comments_form', 'comments_error', 'if_comments_error', 'comments_annotateinvite',
				'comments', 'comments_preview', 'if_comments_preview', 'comment_permlink',
				'comment_id', 'comment_name', 'comment_email', 'comment_web', 
				'comment_time', 'comment_message', 'comment_anchor', 'author', 
				'if_author', 'if_article_author', 'body', 'title', 'excerpt', 
				'category1', 'category2', 'category', 'section','keywords', 
				'if_keywords', 'if_article_image', 'article_image', 'search_result_title', 
				'search_result_excerpt', 'search_result_url', 'search_result_date', 
				'search_result_count', 'image_index', 'image_display', 'images', 
				'image_info', 'image_url', 'image_author', 'image_date', 
				'if_thumbnail', 'if_comments', 'if_comments_allowed', 'if_comments_disallowed', 
				'if_individual_article', 'if_article_list', 'meta_keywords', 'meta_author', 
				'dowrap', 'dotag', 'permlink', 'permlinkurl_id', 'permlinkurl', 'lang', 
				'breadcrumb', 'if_excerpt', 'if_search', 'if_search_results', 'if_category', 
				'if_article_category', 'if_first_category', 'if_last_category', 
				'if_section', 'if_article_section', 'if_first_section', 'if_last_section', 
				'php', 'custom_field', 'if_custom_field', 'site_url', 'img', 'error_message', 
				'error_status', 'if_status', 'page_url', 'if_different', 'if_first_article', 
				'if_last_article', 'if_plugin', 'file_download_list', 'file_download', 
				'file_download_link', 'file_download_size', 'file_download_created', 
				'file_download_modified', 'file_download_id', 'file_download_name', 
				'file_download_category', 'file_download_author', 'file_download_downloads', 
				'file_download_description', 'hide', 'rsd', 'variable', 'if_variable', 
				'article', 'article_custom', 'else', 'txp_die',
			),
		/*
			HTML5 and TXP tag attributes
		*/
		2 => 
			array(
				'separator','format','media','n','name','rel','title','align',
				'class','escape','html_id','id','width','height','style','wraptag',
				'link','link_rel','poplink','form','category','flavor','label',
				'limit','section','break','author','realname','auto_detect','labeltag',
				'pageby','offset','sort','this_section','gmt','lang','email','linktext',
				'login','pass','sortby','sortdir','no_widow','match','type',
				'active_class','categories','exclude','parent','children','default_title',
				'include_default','sections','size','button','showalways','item',
				'showcount','textonly','isize','msgcols','msgrows','msgstyle',
				'show_preview','breakclass','anchor','url','thumbnail','hilight',
				'text','c','extension','sep','linkclass','min','max','number',
				'default','value','val','src','status','ver','version','filename',
				'decimals','abbr', 'accept-charset', 'accept', 'accesskey', 'action',
				'align', 'alink', 'alt', 'archive', 'axis', 'autocomplete', 'autofocus',
				'background', 'bgcolor', 'border','cellpadding', 'cellspacing',
				'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid',
				'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan',
				'compact', 'content', 'coords', 'contenteditable', 'contextmenu',
				'data', 'datetime', 'declare', 'defer', 'dir', 'disabled', 'draggable',
				'dropzone','enctype','face', 'for', 'frame', 'frameborder', 'form',
				'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget',
				'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv',
				'hidden', 'id', 'ismap','label', 'lang', 'language', 'link', 'longdesc',
				'marginheight', 'marginwidth', 'maxlength', 'media', 'method',
				'multiple', 'min', 'max','name', 'nohref', 'noresize', 'noshade',
				'nowrap','novalidate', 'object', 'onblur', 'onchange', 'onclick',
				'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 
				'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 
				'onmouseup', 'onselect', 'onsubmit', 'onunload', 'onafterprint', 
				'onbeforeprint', 'onbeforeonload', 'onerror', 'onhaschange', 'onmessage', 
				'onoffline', 'ononline', 'onpagehide', 'onpageshow', 'onpopstate', 
				'onredo', 'onresize', 'onstorage', 'onundo', 'oncontextmenu', 
				'onformchange', 'onforminput', 'oninput', 'oninvalid', 'ondrag',
				'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart',
				'ondrop', 'onmousewheel', 'onscroll', 'oncanplay', 'oncanplaythrough',
				'ondurationchange', 'onemptied', 'onended', 'onloadeddata',
				'onloadedmetadata', 'onloadstart', 'onpause', 'onplay', 'onplaying',
				'onprogress', 'onratechange', 'onreadystatechange', 'onseeked',
				'onseeking', 'onstalled', 'onsuspend', 'ontimeupdate', 'onvolumechange',
				'onwaiting', 'profile', 'prompt', 'pattern', 'placeholder', 'readonly',
				'rel', 'rev', 'rowspan', 'rows', 'rules', 'required', 'scheme',
				'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src',
				'standby', 'start', 'style', 'summary', 'spellcheck', 'step',
				'tabindex', 'target', 'text', 'title', 'type', 'usemap', 'valign',
				'value', 'valuetype', 'version', 'vlink', 'vspace', 'width',
				/*
					TXP specific
				*/
				'separator','format','media','n','name','rel','title','align',
				'class','escape','html_id','id','width','height','style','wraptag',
				'link','link_rel','poplink','form','category','flavor','label',
				'limit','section','break','author','realname','auto_detect',
				'labeltag','pageby','offset','sort','this_section','gmt','lang',
				'email','linktext','login','pass','sortby','sortdir','no_widow',
				'match','type','active_class','categories','exclude','parent',
				'children','default_title','include_default','sections','size',
				'button','showalways','item','showcount','textonly','isize','msgcols',
				'msgrows','msgstyle','show_preview','breakclass','anchor','url',
				'thumbnail','hilight','text','c','extension','sep','linkclass',
				'min','max','number','default','value','val','src','status',
				'ver','version','filename','decimals',
			),
	),
	'SYMBOLS' => array(
		'/', '=', '<', '>', '<txp:'
	),
	'CASE_SENSITIVE' => array(
		GESHI_COMMENTS => true,
		0 => false,
		1 => true,
		2 => true,
		3 => false
	),
	'STYLES' => array(
		'KEYWORDS' => array(),
		'COMMENTS' => array(),
		'ESCAPE_CHAR' => array(),
		'BRACKETS' => array(),
		'STRINGS' => array(),
		'NUMBERS' => array(),
		'METHODS' => array(),
		'SYMBOLS' => array(),
		'SCRIPT' => 
			array(
				-2 => '',
				-1 => '',
				0 => '',
				1 => '',
				2 => '',
				3 => ''
			),
		'REGEXPS' => 
			array(
				0 => '',
			)
	),
	'URLS' => array(
		0 => 'http://december.com/html/4/element/{FNAMEL}.html',
		1 => 'http://textpattern.net/wiki/?search={FNAMEL}',
		2 => '',
	),
	'OOLANG' => false,
	'OBJECT_SPLITTERS' => array(),
	'REGEXPS' =>
		array(
			/*
				Highlight the "txp" prefix in the XML like tags
			*/
			0 => 
				array(
					GESHI_SEARCH => '(&lt;txp:|&lt;\/txp:)',
					GESHI_REPLACE => '\\1',
					GESHI_MODIFIERS => '',
					GESHI_BEFORE => '',
					GESHI_AFTER => ''
				),
		),
	'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
	'SCRIPT_DELIMITERS' =>
		array(
			-2 => 
				array(
					'<![CDATA[' => ']]>',
					'<txp:php>' => '</txp:php>'
				),
			-1 =>
				array(
					'<txp:hide>' => '</txp:hide>',
					'<!--' => '-->',
				),
			0 => 
				array(
					'<!DOCTYPE' => '>'
				),
			1 => 
				array(
					'&' => ';'
				),
			2 => 
				array(
					'<' => '>'
				),
		),
	'HIGHLIGHT_STRICT_BLOCK' => 
		array(
			-3 => false,
			-2 => false,
			-1 => true,
			0 => false,
			1 => false,
			2 => true,
		),
	'TAB_WIDTH' => 2,
	'PARSER_CONTROL' => array(
		'ENABLE_FLAGS' => array('NUMBERS' => GESHI_NEVER),
		'KEYWORDS' => array(
			/*
				Make sure HTML and TXP tags do not attack eachother
			*/
			0 => array(
				'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
				'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
			),
			1 => array(
				'DISALLOWED_BEFORE' => '(?<=&lt;txp:|&lt;\/txp:)',
				'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
			)
		)
	)
);
?>