<?php
include_once (__DIR__."/bigBen.class.php");
date_default_timezone_set("America/Chicago");
//error_reporting(0);


$btLogBasename = substr(basename(__FILE__), 0, -4);


$configArr = array(
	"oandaApiKey" => LIVE_API_KEY,
	"oandaAccountId" => 337055,
);



$b = new BigBen("Live", $configArr);

print "\n\n\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print "*************************************************************************\n";
print date("c")."\n\n\n";


$b->execute();

