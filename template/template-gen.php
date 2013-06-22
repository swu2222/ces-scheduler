<?php
	echo "Starting Template Gen...<br />\n";
	
	$template = file_get_contents("template.php");
	$content_folder = "./";

	function find_content($var)
	{
		return (substr($var,0,2) == "t-" ? true : false);
	}

	echo "Loading up content files...<br />\n";
	//find all files that start with t-
	$content_list = array_values(array_filter(scandir($content_folder), "find_content"));

	//generate each php file
	for($i=0;$i<count($content_list);$i++)
	{
		include($content_list[$i]);
		//translate placeholder
		$trans = array(
			"{{TITLE}}" => $title,
			"{{CONTENT}}" => $content,
			"{{HEADING}}" => $heading
		);

		//replace placeholder
		$content = strtr($template, $trans);
		
		echo "Creating " . substr($content_list[$i],2) . "...<br />\n";
		$fp = fopen("../" . substr($content_list[$i],2),"w");
		fwrite($fp,$content);
		fclose($fp);
	}
	echo "Template Gen Complete<br />\n";
	echo "Total of $i files generated.<br />\n";
	
?>