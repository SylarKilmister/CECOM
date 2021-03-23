<?php
$file  = DOC_ROOT . "/properties/timeline.json";
$string = file_get_contents($file);
$timeline = json_decode($string, true);
$smarty->assign('timelines', $timeline);

$file  = DOC_ROOT . "/properties/team.json";
$string = file_get_contents($file);
$team = json_decode($string, true);
$smarty->assign('team', $team);
