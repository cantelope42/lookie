<?

    $link = mysqli_init();
    mysqli_ssl_set('./certs/key', './cert/cert', './certs/cert_ca', null, null);
    mysqli_real_connect($link, "localhost", "my_user", "my_password", "my_db");
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
