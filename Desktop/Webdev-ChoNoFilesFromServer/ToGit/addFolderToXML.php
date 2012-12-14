<?php 

$newFolderName= $_POST["newFolderName"];

$newFolderNameString = strval($newFolderName);

$xml = simplexml_load_file("videoFilesTree.xml");
$newFolder = $xml->project[0]->addChild("date","");
$newFolder->addAttribute('title',$newFolderNameString);
$xml->asXML("videoFilesTree.xml");

?> 

