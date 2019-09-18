<!-- <?php
$matt=$_GET['mat'];
var_dump($matt);

if ($matt==true) {

//     $f=fopen("text.txt", "r");
// $contenu = file_get_contents("text.txt");




$result = explode(PHP_EOL, $matt);

// $results = array_filter(array_map("trim", $result));
      foreach ($result as $ligne) 
	{
		$emp=explode(" ",$ligne);
		// var_dump($ligne);
		
          
    }    
          $mat=$emp[0];
          $nom=$emp[1];
          $prenom=$emp[2];  
          $date=$emp[3];
          $email=$emp[4];
          $tel=$emp[5];
          $sal=$emp[6];
//  fclose($f);

}    

if(isset($_POST["set"])) 
  {
	  $f=file("text.txt");
	 $f=[$matt]=$nom;
	 $fh=fopen("text.txt","a+");
	 foreach ($f as $line) {
		
	 }
	 fwrite($fh,$_POST['matricule']." ");
				
		fwrite($fh,$_POST['nom']." ");
		
		fwrite($fh,$_POST['prenom']." ");
		
		fwrite($fh,$_POST['date']." ");
		
		fwrite($fh,$_POST['email']." ");
		
		fwrite($fh,$_POST['tel']." ");
		
		fwrite($fh,$_POST['sal'].PHP_EOL);

	  fclose($fh);
    
      header("location:Employer.php");
    }

    



?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Employer.css">

    <title>Employer</title>
</head>
<body>
<center>
<fieldset>
	<legend align="center"><font color="green">Employer</font></legend>
	<form method="POST">
		<label>Matricule</label>
		<div>
		<input type="text" name="matricule" value="<?=$mat?>" readonly>
		</div><br>
	<label>Nom</label>
	<div>
		<input type="text" name="nom" placeholder=" NomSvp" value="<?=$nom?>">
	</div><br>
	<label>Prenom</label>
	<div>
		<input type="text" name="prenom" placeholder="Nom Svp" value="<?= $prenom?>">
	</div><br>
	<label>Date De Naissance</label>
	<div>
		<input type="text" name="date" pattern="\d{2,}/\d{2,}/\d{4}" placeholder="jj/mm/aaaa" value="<?= $date?>" >
	</div><br>
	<label>Email</label>
	<div>
		<input type="text" name="email" placeholder="Exemple@gmail.com" value="<?= $email?>">
	</div><br>
	<label>Telephone</label>
	<div>
		<input type="text" name="tel"placeholder="+221..." value="<?= $tel?>">
	</div><br>
`	<label>Salaire</label>
	<div>
		<input type="text" name="sal" placeholder="Salaire DE Base  Svp" value="<?= $sal?>">
	</div><br>
	<br>
	<div>
		<input type="submit" name="set" value="Modifier" id="ajj">
		<input type="reset" name="annuler" value="Annuler" id="ann">
	</div><br>
	</form>
</fieldset>
</center>
</body>
</html>