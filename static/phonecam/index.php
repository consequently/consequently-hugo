<html>
	margin-top: 10px;
	margin-right: 10px;
}
	clear: both;
	height: 0;
	line-height: 0;
}
{ 
     $ext = strrchr($name, '.'); 
     if($ext !== false) 
     { 
         $name = substr($name, 0, -strlen($ext)); 
     } 
     return $name; 
} 
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
/** 