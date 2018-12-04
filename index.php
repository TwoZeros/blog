<?php
require_once('smarty/libs/Smarty.class.php');
require_once('class/post.php');
$post1= new Post("hello world", "exaple text");
$smarty = new Smarty;
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
$smarty->config_dir = "config";
$smarty->cache_dir = "cashe";
$smarty->assign('post',$post1);
$smarty->display('index-template.tpl');
?>