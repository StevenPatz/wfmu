<?php
$doc = new DOMDocument();
$doc->load('DK.xml');
$arrFeeds = array();
foreach ($doc->getElementsByTagName('item') as $node) {
    $itemRSS = array ( 
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($arrFeeds, $itemRSS);
}
$links = count($arrFeeds);
for ($x=0;$x<$links;$x++) {
  print $arrFeeds[$x]['link'];
  print "\n";
  print $arrFeeds[$x]['date'];
  print "\n";
}
//print $arrFeeds[5]['link'];
?>

