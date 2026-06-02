<?php

$file = $_GET["file"];
$action = $_GET["action"] ?? "view";

$path = $file;
echo $path;
// exit;

if (!file_exists($path)) {
    die("File not found");
}

if ($action == "download") {

    // FORCE DOWNLOAD
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=\"$file\"");
    header("Content-Length: " . filesize($path));

} else {

    // VIEW IN BROWSER
    header("Content-Type: application/pdf");
    header("Content-Disposition: inline; filename=\"$file\"");
}

readfile($path);
exit;

?>