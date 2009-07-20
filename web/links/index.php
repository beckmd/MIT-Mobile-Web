<?php
/**
 * Copyright (c) 2008 Massachusetts Institute of Technology
 * 
 * Licensed under the MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 */


require_once "../page_builder/page_header.php";
require_once "../../config.inc.php";

class Links {
  public static $links = array(
    'GroupWise' => 'wvugw.wvu.edu',
    'eCampus' => 'ecampus.wvu.edu',
    'MIX' => 'www.mix.wvu.edu',
    'SOLE' => 'sole.hsc.wvu.edu',
    'Daily Athenaeum' => 'www.da.wvu.edu'
  );
}

$links = array();
foreach(Links::$links as $name => $link) {
  $links[] = array(
    "name" => htmlentities($name),
    "link" => $link,
  );
}

require "$prefix/index.html";

$page->cache();
$page->output();
    
?>
