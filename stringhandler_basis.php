<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				echo $input1; 
				echo $input1; 
			 }
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Zet hier jouw naam + klas</legend>
				 <input type = "text" name = "input1"  placeholder = '<?php print $input1 ; ?>' ><br>
				 <input type = "text" name = "input2"   placeholder = '<?php print $input2 ; ?>'>
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hier de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
                    <li class="showSpaces">Ingevoerde string 2:  <?php  print $input2  ?> </li>
                    <li>String 1 getrimd trim():  <?php  print trim($input1);     ?> </li>
                    <li>String 1 getrimd trim():  <?php  print trim($input2);     ?> </li>
                    <li>String 3 geconcateneerd:  <?php  print $string3 = trim($input1) . trim($input2); ?> </li>
                    <li>Lengte String 3: <?php print strlen($string3);    ?> </li>
					<li>Omgekeerd:  <?php print strrev($input1 . $input2);    ?>  </li>
                    <li>Positie spatie: <?php print stripos($string3, " "); ?> </li>
                    <li>Positie @: <?php print stripos($string3, "@"); ?> </li>
                    <li>Positie ".": <?php print stripos($string3, "."); ?> </li>
                    <li>String 3 na verandering: <?php print str_replace("PHP","NodeJS",$string3); ?> </li>
                    <li>Letter 1 naar hoofdletter: <?php print ucfirst($string3); ?> </li>
                    <li>Zin naar hoofdletter: <?php print strtoupper($string3); ?> </li>
				</ul>
				<hr>
				<ol>
				<li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
				<li>Hoe moet jij inleveren?: <br>
						1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
						2) Link naar jouw code bij GITHUB</li>
				<li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
				<li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
				</ol>
			</div>
	 </body>
</html>
