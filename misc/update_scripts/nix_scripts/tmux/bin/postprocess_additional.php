<?php

require_once(dirname(__FILE__)."/../../../config.php");
require_once(WWW_DIR."lib/postprocess.php");

$postprocess = new PostProcess(true);
$postprocess->processAdditional($argv[1]);
?>
