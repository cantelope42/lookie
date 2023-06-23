<?

echo shell_exec("printenv") . "\n";
echo "<br><br>";
echo json_encode(getenv());
?>
