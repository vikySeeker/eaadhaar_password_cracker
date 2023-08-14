<?php

function savefile()
{
	$filepath = "./userfiles/";
	$file_name = $_FILES['pdffile']['name'];
	$_SESSION['filename'] = $file_name;
	$temppath = $_FILES['pdffile']['tmp_name'];

	$basename = basename($file_name);
	$originalPath = $filepath.$basename;
	$fileType = pathinfo($originalPath, PATHINFO_EXTENSION);

	if(!empty($file_name)) {
		if($fileType === "pdf") {
			if(move_uploaded_file($temppath, $originalPath)) {
				include_once($_SERVER['DOCUMENT_ROOT']."/passwordExtractor.php");
				$result = extractPassword();
				if($result[0][1]==="Could not find password"){
					return "Sorry, could not find password!!";
				}
				return $result[0][1];
				//return $file_name." was saved successfully<br>".$temppath."<br>".$basename."<br>".$originalPath;
			} else {
				return 'file not uploaded! try again...';
			}
		} else {
			return $fileType."was not allowed!";
		}
	} else {
		return "Please upload a file";
	}
}

?>