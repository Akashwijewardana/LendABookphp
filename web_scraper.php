<?php 
include('simple_html_dom.php');

$html= file_get_html('https://onlinebookclub.org/');

echo $html->find('title',0)->plaintext;



$list = $html->find('div[class="rev_details"]',0);

foreach ($list->find('p[class="rltitle"]') as $element) {

	echo $element->plaintext;
	echo $element->href;
	echo "<br>";
 	// code...
 } ;



for ($i=0; $i <sizeof($list_array); $i++) { 

	echo $list_array;
	// code...
}
 ?>