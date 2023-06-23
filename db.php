<?
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

    $link = mysqli_init();
    mysqli_ssl_set($link, './certs/key', './certs/cert', './certs/cert_ca', null, null);
    $env = getenv();
    $db_pass = explode(':', explode('@', explode('://',$env['CLEARDB_DATABASE_URL'])[1])[0])[1];
    $db_host = explode('/', explode('@', $env['CLEARDB_DATABASE_URL'])[1])[0];
    $db = explode('/', explode('@', $env['CLEARDB_DATABASE_URL'])[1])[1];
    $db_user = $env['USER'];
    echo "user: $db_user<br>pass: $db_pass<br>host: $db_host<br>";
    mysqli_real_connect($link, $db_host, $db_user, $db_pass, $db, 3306);
    $baseURL = 'https://lookie1.whitehot.ninja/';


    $sql = 'SHOW DATABASES;';
    $res = mysqli_query($link, $sql);
    if(mysqli_num_rows($res)){
      $row = mysqli_fetch_assoc($res);
      echo json_encode($row) . "<br><br>";
    }
    echo "<br><br>done.";
/*
$db_user="user";
  $db_pass=explode("\n", file_get_contents('/home/cantelope/plorgpw'))[0];
	$db_host="localhost";
	$db="lookie";
	$baseURL="http://jsbot.whitehot.ninja/";

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db);
 */

?>
