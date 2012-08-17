<?php
function filter_string($jsomstring)
{
$filter_tag =array(
'<script type="text/javascript">',
"<script type='text/javascript'>",
'<script language="javascript">',
"<script language='javascript'>",
'<script>',
'</script>'
);
$filter_jq =array(
	"$(function(){",
	"(function($) {",
	"jQuery(document).ready(function($){",
	"$(window).load(function(){ ",
	"$(document).ready(function() {",
	"jQuery(document).ready(function(){",
	"});"
);

$jsomstring =trim($jsomstring);
foreach($filter_tag as $symbl) {
$jsomstring = str_replace($symbl,'',$jsomstring); 
}
foreach($filter_jq as $symbl)
{
$jsomstring = str_replace($symbl,'',$jsomstring); 
}
return $jsomstring;
}


function filter_tag($jsomstring)
{
$filter_tag =array(
'<script type="text/javascript">',
"<script type='text/javascript'>",
'<script language="javascript">',
"<script language='javascript'>",
'<script>',
'</script>'
);
$jsomstring =trim($jsomstring);
foreach($filter_tag as $symbl) {
$jsomstring = str_replace($symbl,'',$jsomstring); 
}
return $jsomstring;
}
?>