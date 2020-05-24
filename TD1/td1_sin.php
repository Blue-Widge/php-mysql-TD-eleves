<?php
	try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tdsin;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$query = $bdd->query('SELECT * FROM famille_tbl');
echo '<h2>premier exercice : </h2><br/><br/>';
while ($donnees=$query->fetch())
{
	echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$query->closeCursor();

echo '<h2> Deuxième exercice : </h2></br></br>';
$query = $bdd->query('SELECT * FROM famille_tbl ORDER BY prenom ASC');
while ($donnees=$query->fetch())
{
	echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$query->closeCursor();

echo '<h2> Troisième exercice : </h2></br></br>';
$query = $bdd->query('SELECT * FROM famille_tbl WHERE date<\'1960-01-01\'');
while ($donnees=$query->fetch())
{
	echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$query->closeCursor();
?>