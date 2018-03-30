<?
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (!isset($_SESSION)){
		session_start();
	}
	
//$lang = "en";
if( isset( $_GET["lang"] ) ) {
    $lang = $_GET["lang"];
    setcookie ( 'language', $lang, time() + 60*60*24*30);
    //header( "Location: index.php?lang=".$_GET["lang"]."");
	
	header( "Location: index.php");
}
?>