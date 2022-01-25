<!doctype html>
<html lang="en">
<head>
<title>Recursion Example #2: Reading a Tree of Files and Folders</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>

<h1>Recursion Example #2: Reading a Tree of Files and Folders</h1>

<?php

$folderPath = "photos";

function readFolder( $path ) {

  // Open the folder
  if ( !( $dir = opendir( $path ) ) ) die( "Can't open $path" );
  $filenames = array();

  // Read the contents of the folder, ignoring '.' and '..', and
  // appending '/' to any subfolder names. Add all the files and
  // subfolders to the $filenames array.

  while ( $filename = readdir( $dir ) ) {
    if ( $filename != '.' && $filename != '..' ) {
      if ( is_dir( "$path/$filename" ) ) $filename .= '/';
      $filenames[] = $filename;
    }
  }

  closedir ( $dir );

  // Sort the filenames in alphabetical order
  sort( $filenames );

  // Display the filenames, and process any subfolders

  echo "<ul>";

  foreach ( $filenames as $filename ) {
    echo "<li>$filename";
    if ( substr( $filename, -1 ) == '/' ) readFolder( "$path/" . substr( $filename, 0, -1 ) );
    echo "</li>";
  }

  echo "</ul>";
}

echo "<h2>Contents of '$folderPath':</h2>";
readFolder( $folderPath );

?>

</body>
</html>