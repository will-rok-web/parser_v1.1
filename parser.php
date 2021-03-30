<?php	
	set_time_limit(0);
	$url="";
	$tag="";
	$field="";	
	if(isset($_POST['url'])) $url = $_POST['url'];
	if(isset($_POST['tag'])) $tag = $_POST['tag'];
	if(isset($_POST['field'])) $field = $_POST['field'];	
	if ($url=='' || $tag=='' || $field=='') header ("Location: error.html");	
	include_once ('lib/func_curl.php');
	include_once ('lib/simple_html_dom.php');	
	$html=curl_get($url);	
	$dom=str_get_html($html);	
	$tags=$dom->find ($tag);
	foreach ($tags as $tag){		
		echo $tag->$field . '<br>';		
	}	
?>