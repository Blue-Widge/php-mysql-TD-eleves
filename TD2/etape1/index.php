<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TD2-SIN 2020</title>
		<style type="text/css"></style>
	</head>
	<body>
        <form action="" method ="POST">
            <input type="text" name="nom" value="">
            <input type="text" name="prenom" value="">
            <input type="text" name="statut" value="">
            <input type="text" name="date" value="">
            <input type="submit"  value="Submit">
        </form>
        <?php
            // récupération des données du formulaire
            $nom= $_POST['nom'];	
            $prenom= $_POST['prenom'];
            $statut= $_POST['statut'];
            $date= $_POST['date'];
            //afficher les données ici dans des div 
            echo "<div> $nom </div>";
			echo "<div> $prenom </div>";
			echo "<div> $statut </div>";
			echo "<div> $date </div>";
        ?>
    </body>
  
</html>
