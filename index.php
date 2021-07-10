<?
  header('Content-Type: text/html');
  $url = $_GET['i'];
  $full = 'https://ipfs.io/ipfs/' . $url; 
  echo str_replace('./', $full . '/', file_get_contents($full));
?>
