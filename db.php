<?

    $link = mysqli_init();
mysqli_ssl_set('./certs/key', './cert/cert', './certs/cert_ca', null, null);
    $env = getenv();
$db_host = $env['CLEARDB_DATABASE_URL'];
$db_user = $env['USER'];
$db_pass = $env['']
    mysqli_real_connect($link, $db_host, $db_user, $db_pass, $db);
    $baseURL = 'https://lookie1.whitehot.ninja/';
/*
$db_user="user";
  $db_pass=explode("\n", file_get_contents('/home/cantelope/plorgpw'))[0];
	$db_host="localhost";
	$db="lookie";
	$baseURL="http://jsbot.whitehot.ninja/";

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db);
 */

?>
