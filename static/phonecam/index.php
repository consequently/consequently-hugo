<html><style type="text/css" media="all">@import "../2005.css";.photo 	{ float: left; width: 180px;height: 280px;text-align: center;padding: 10px;
	margin-top: 10px;
	margin-right: 10px;font-family: "Gill Sans", sans; font-size:72%; font-weight:normal; color:#060; border: 1px solid #ccd0cc;line-height:133%;background:#f9fff9;
}.photo p {margin-top:16px;}div.clearboth	{
	clear: both;
	height: 0;
	line-height: 0;
}</style><title>consequently.org * Occasional Photos</title><body><div id='main1'><div id='middle' style="text-align:center;"><div class='column-in'><h1>Occasional Photos</h1><h2>from <a href="http://consequently.org">consequently.org</a></h2><?phpfunction strip_ext($name) 
{ 
     $ext = strrchr($name, '.'); 
     if($ext !== false) 
     { 
         $name = substr($name, 0, -strlen($ext)); 
     } 
     return $name; 
} /**
 FUNCTION: glob_rsort_modtime()
 * Glob reverse sorted by file modification time.
 *
 * Returns an array of files matching the given glob pattern, sorted 
 * by their modification times in descending order.  The array keys
 * hold the filepath and the values hold the mtime.  On error, array
 * will be indexed and contain 'false' and an error message.
 *
 * {@source}
 *
 * @param string $patt Pattern to search, including glob braces.
 * @return array filename => mtime OR false, 'errormsg'.
 */
function glob_rsort_modtime( $patt ) {
    if ( ( $files = @glob($patt, GLOB_BRACE) ) === false ) {
        return array( false, 'Glob error.');
    }
    if ( !count($files) ) {
        return array( false, 'No files found.');
    }
    $rtn = array();
    foreach ( $files as $filename ) {
        $rtn[$filename] = filemtime($filename);
    }
    arsort($rtn);
    reset($rtn);
    return $rtn;
}

$files = glob_rsort_modtime( '*.jpg' ) ;
/** echo'<pre>'.print_r($files, true).'</pre>';*/ foreach($files as $filename => $filetime) {if (((date("F, Y",$filetime)) == $cd) == false) {$cd = date("F, Y",$filetime);echo'<div class="clearboth">&nbsp;</div></div><div class="column-in"><h2>Featured in '.$cd.'</h2>';}echo'<div class="photo"><img src="'.$filename.'" /><p>'.strip_ext($filename).'</p></div>';}?> <div class="clearboth">&nbsp;</div></div><div class="column-in"><p class="slug">These extremely lo-res photos are taken with a Sony Ericsson T630.</p><p class="slug">All photos copyright &copy; 2005 <a href="http://consequently.org">Greg Restall</a>.</p><p class="slug" style="color:#f00;">Do not reproduce photos of <em>people</em> without their permission.</p></div></div></div></body></html>