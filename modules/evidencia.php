<?php



function scanDirs($target, &$files) {

    if(is_dir($target)){
        $finds = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        foreach( $finds as $file )  {
            scanDirs( $file , $files);
        }
    } elseif (is_file($target)) {
        $cad['file'] =  true;
        $file = str_replace("\\","/", $target) ;
        $cad['path'] = $file;
        array_push($files, $cad);
    }
}
$dir = DOC_ROOT."/evidencias";
$files = [];
scanDirs($dir, $files);
$smarty->assign('files', $files);
