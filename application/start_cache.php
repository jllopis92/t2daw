<?
//Algunos parametros de configuracion
$settings_cachedir = 'D:\wamp\www\daw2\application\cache_files';
$settings_cachetime = 3600; //keep cache files for 3600 seconds (1 hour)
//Pagina php
$thispage = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$cachelink = $settings_cachedir.md5($thispage).”.html”;
if (@file_exists($cachelink)) {
$cachelink_time = @filemtime($cachelink);
if ((time() – $settings_cachetime) < $cachelink_time) { @readfile($cachelink);die(); }
}
ob_start();
?> 