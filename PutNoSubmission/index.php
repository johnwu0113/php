/* PUT data comes in on the stdin stream */
$putdata = fopen("php://input", "r");

/* Open the PUT data on a specific folder and give it a name */
$fp = fopen("./upload/".$_SERVER["REMOTE_ADDR"]."-".$_SERVER['REQUEST_TIME'].".Filename_Extension", "w");

/* Read the data 1 KB at a time and write to the file */
while ($data = fread($putdata, 1024))
  fwrite($fp, $data);

/* Close the streams */
fclose($fp);
fclose($putdata);

?>
