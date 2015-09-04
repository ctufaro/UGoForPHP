if (isset($_GET["udid"])) {
    echo($_GET["udid"]);
    exit();
}
$udid = substr(strstr(strstr($HTTP_RAW_POST_DATA, '</dict>', true),"<string>"),8,40);
header("Location: ". $_SERVER["REQUEST_URI"] . "?udid=" . $udid, true, 301);

  
