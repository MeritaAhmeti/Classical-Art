<?php
$pyetjet = array

  (
  array("<b>1.Which of these painters are often associated with this art movement(Baroque)?</b>","P.Paul Rubens,N.Poussin and J.Vermeer", "G.Courbet,J.F.Millet and J.B.C.Corot", "T.Cole,F.E.Church,A.Bierstadt and A.B.Durand<br><br>"),
  array("<b>2.In which city can you find this museum(Museu Picasso)?</b>", "Madrid", "Lyon","Barcelona<br><br>"),
  array("<b>3.Pablo Picasso lived between which of these years?</b>","(1869-1954)", "(1746-1828)", "(1881-1973)<br><br>")
  );
$true =  ('<b>Correct!</b><br>');
$false = ('<b>Incorrect!</b><br>');

if (isset($_GET["Pergjigja0"]) && isset($_GET["Pergjigja1"]) && isset($_GET["Pergjigja2"])) {
	// nese pergjigjja e pyetjes se pare eshte e dyta e sakte
	if ($_GET["Pergjigja0"] == $pyetjet[0][1]) {
		echo $true;
	}
	else
	{
		echo $false;
	}
	// nese pergjigjja e pytjes se dyte eshte 3 e sakte
	if ($_GET["Pergjigja1"] == $pyetjet[1][3])
	{
		echo $true;
	}
	else
	{
		echo $false;
	}
	// nese pergjigjja e pytjes se trete eshte 3 e sakte
	if ($_GET["Pergjigja2"] == $pyetjet[2][3]) 
	{
		echo $true;
	}
	else
	{
		echo $false;
	}
  
  	// pas pergjigjjes del si output nje fjali 
	echo "<h3>" . ('Do you want to play again!Please wait 5 seconds!<br/>') . "</h3>";

	//dergon nje heder te perpunuar HTTP te klienti kete rast te loja.php
	header( "refresh:5;url=loja.php" );
}
	else
	{
	echo '
	<h3 style = "text-align:center; font-style:italic; font-size:40px;">' . ('Play a game') . '!</h3>
	<form action="loja.php" method="GET" style="margin-left:400px; margin-right:400px; padding:25px; border:3px solid #808080; border-radius:8px; background-color:#bfbfbf;"><br>';
	 // caktimi i tekstit te pytjeve me rend rend
	for ($i=0; $i < count($pyetjet); $i++) { 
		echo '<label>' . $pyetjet[$i][0] . '</label><br/>
		<input type="radio" name="Pergjigja' . $i . '" value="' . $pyetjet[$i][1] . '">' . $pyetjet[$i][1] . ' <br>
	  	<input type="radio" name="Pergjigja' . $i . '" value="' . $pyetjet[$i][2] . '">' . $pyetjet[$i][2] . '<br>
		<input type="radio" name="Pergjigja' . $i . '" value="' . $pyetjet[$i][3] . '">' . $pyetjet[$i][3] . '<br>
	';
	} 
	echo '<input type="submit"  style="margin-left:225px"></form>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
</head>
<body style="background-color: #ebebeb;">
</body>
</html>