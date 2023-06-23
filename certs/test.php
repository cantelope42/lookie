<?

echo shell_exec("printenv") . "\n";
echo "\n\n";
echo json_encode(getenv());
?>
