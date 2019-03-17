<?php
//require_once "include/vendor/autoload.php";
use FastSimpleHTMLDom\Document;
// Create DOM from URL
$html = Document::file_get_html('https://streamango.tv/putlockers/');
// Find all post blocks
$item= array();
foreach($html->find('div.ml-item a ') as $post) {
echo $post->attr['href'];
$item['a']   = $post->find('a[oldtitle]');
print_r($item['a']);
	//print_r($post->attr['href']);
	//	$html->find('a[title], img[title]');
    $item['img']    = $post->find('img .data-original')->src;
//print_r ($item['img']);
$item = $html->find('img')->src;
echo ( $html->find('img'));
}

