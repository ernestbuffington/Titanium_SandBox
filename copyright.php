<?php
#########################################################################
# Titanium Blogs Top 100 v1.0                                           #
#########################################################################
# PHP-Nuke Titanium : Enhanced PHP-Nuke Web Portal System               #
#########################################################################
# [CHANGES]                                                             #
# Table Header Module Fix by TheGhost               v1.0.0   01/30/2012 #
# Nuke Patched                                      v3.1.0   06/26/2005 #
#########################################################################
define('CP_INCLUDE_DIR', dirname(dirname(dirname(__FILE__))));
require_once(CP_INCLUDE_DIR.'/includes/showcp.php');

$module_name = basename(dirname(__FILE__));
$mod_name = "Titanium SandBox";
$author_email = "ernest.buffington@gmail.com";
$author_homepage = "https://theghost.86it.us";
$author_name = "Ernest Allen Buffington";
$license = "GNU";
$based_on = "Built From Scratch";
$download_location = "";
$module_version = "v4.0.0b";
$release_date = "09/03/2022";
$module_description = "aDEveloper Module For PHP-Nuke Titanium";
$mod_cost = "$300 Dollars";
show_copyright($author_name, $author_email, $author_homepage, $based_on, $license, $download_location, $module_version, $module_description, $release_date, $mod_cost);
?>
