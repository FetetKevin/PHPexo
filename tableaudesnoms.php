<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Liste Simploniens</title>
  </head>


  <body>
    <table border=1px>



<?php /*recup les info du fichier xml sous forme de tableau sans bordures*/
if (file_exists('classe-simploniens.xml')) {
   $xml = simplexml_load_file('classe-simploniens.xml');

   print_r($xml);
}
else {
 exit('Echec lors de l\'ouverture du fichier classe-simploniens.xml.');
}
?>



<br></br>
<br></br>



<?php /*recup les infos du fichier xml sous forme de tableau avec bordures*/
  $fichier = 'classe-simploniens.xml';
    $xml = simplexml_load_file($fichier);

foreach($xml as $personne){
echo"<tr><td>".$personne->nom.'<td> '.$personne->prenom.'<td>'.$personne->date_naissance."</td>"; 
}
?>


<br></br>
<br></br>



<?php /*recup les infos du fichier xml sous forme de tableau avec bordures*/
  $fichier = 'classe-simploniens.xml';
    $xml = simplexml_load_file($fichier);

function age($date)
{
  $dna = strtotime($date);
  $now = time();
   
  $age = date_naissance('Y',$now)-date('Y',$dna);
  if(strcmp(date('md', $dna),date('md', $now))>0) $age--;
 
  return $age;
}
foreach($xml as $personne){
echo"<tr><td>".$personne->nom.'<td> '.$personne->prenom.'<td>'.$personne->date_naissance."</td>"; 
}
?>

    <table>
  </body>
</html>
