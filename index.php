<?php

	include_once('init.php');
	include_once('config.php');
	include_once(DOC_ROOT.'/libraries.php');

	if (!isset($_SESSION))
	  session_start();

	$pages = array(
		'homepage',
		'about',
		'index',
		'service',
		'contact',
		'evidencia',

	);

	$page = $_GET['page'];
	$section = $_GET['section'];

	if(!in_array($page, $pages))
		$page = 'homepage';

	include_once(DOC_ROOT.'/modules/'.$page.'.php');

	$smarty->assign('page', $page);
	$smarty->assign('section', $section);

	$pageTpl = ($section == '') ? $page : $page.'_'.$section;

	$smarty->assign('pageTpl', $pageTpl);
	$smarty->assign('lang', $lang);

	$usr = $_SESSION['Usr'];

	$smarty->assign('usr',$usr);

	// $miColor = $documento->extraeStilo();
	$noCache = mt_rand(1,1000);
    $smarty->assign('nocache',$noCache);
	$smarty->assign('miColor',$miColor);
    $smarty->assign('year',date('Y'));
    $smarty->assign('footer',FOOTER);


    $_SESSION['Usr']['page'] = $page;
    $smarty->display(DOC_ROOT.'/templates/index.tpl');

?>
