<?php 
function set_translation_language($lang){
    $directorioArchivos = APPPATH.'language/locale';
    putenv('LANG='.$lang.'.UTF-8');
    setlocale(LC_ALL, $lang.'.UTF-8');
    bindtextdomain('lang', $directorioArchivos);
    textdomain('lang');//nombre de los archivos
}
?>