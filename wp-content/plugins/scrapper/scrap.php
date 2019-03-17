<?php

//header("Access-Control-Allow-Origin:https://openloadmovies.net");?>
<!DOCTYPE html>
<html>
<head>
	<title>Scrapping Data From a Webpage</title>
	<script src="jquery_min.js"></script>
		    <script src="qunit.js"></script>
	 <!----  <script src="cdomain.js"></script>-->
   <script src="main.js"></script>
    <link rel="stylesheet" href="main.css"/>
	<script>
		//$("document").ready(function() {
//$("#content").load("curl.php #noupesoc");
//});
	</script>
</head>
<body>
<div id="res"></div>
<textarea rows="5" cols="45" id="link" required placeholder="Insert the url"></textarea><br>
<button id="btn" type="button">EXTRACT DATA</button>

	
	
	<form method="post" name="scrap_form" id="scrap_form" action="scrap.php" >
<label>Enter Website URL To Scrape Data</label>
<input type="input" name="website_url" id="website_url">
<input type="submit" name="submit" value="Submit" >
</form>
	
	
	<?php 
include_once('simple_html_dom.php');

$target = "https://streamango.tv/putlockers/";
$html = file_get_html($target);
foreach($html->find('div.ml-item') as $item){
    $item->plaintext;
  
}
	
//foreach($html->find('div.ml-item') as $element) 
//{
	//$data = file_get_html($element);
	foreach($html->find('div.ml-item a') as $anchor) 
{
	
	echo $anchor->attr['href']." & oldtitle= ";
		//print_r($anchor->find('h1')->plaintext);
       
}
	


foreach($html->find('img ') as $element) {
    echo $element->src;
}
	
	
	

	
	
	?>
</body>
</html>