<?php
ob_start();
require("db.php");

// Start XML file, create parent node
$doc = new DOMDocument('1.0','UTF-8');
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);

// Select all the rows in the bins table from database(mysql)
$select=$conn->query("SELECT *FROM markers",PDO::FETCH_OBJ);
$select->execute();
header("Content-type: text/xml");


while($row=$select->fetch()){
    // Add to XML document node
    $node = $doc->createElement("marker");
    $newnode = $parnode->appendChild($node);
    
    $newnode->setAttribute("id", $row->id);
    $newnode->setAttribute("name", $row->name);
    $newnode->setAttribute("address", $row->dress);
    $newnode->setAttribute("lat", $row->lat);
    $newnode->setAttribute("lng", $row->lng);
    $newnode->setAttribute("type", $row->type);

 }
  
  $xmlfile = $doc->saveXML() ;
  print_r($xmlfile);
  ob_end_flush();
  ?>