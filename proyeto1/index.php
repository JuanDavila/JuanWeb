<?php

$cabezeraChiste = array("wanna bad joke",
						"global warming",
						"jajjajajaja",
						"otra broma",
						"keep 'em comming",
						"last one... promisse");

$urlChiste = array("https://i.imgflip.com/8uhl0.jpg",
					"http://cdn.acidcow.com/pics/20121002/science_jokes_18.jpg",
					"http://www.365imagenesbonitas.com/wp-content/uploads/2014/07/imagenes-bonitas-tiempo.jpg",
					"http://img.opposingviews.com/sites/default/files/styles/adaptive/public/gallery/13/11/slides/arcsupport.jpg?itok=vmOWsjiY",
					"http://img0.joyreactor.com/pics/post/funny-pictures-auto-lame-pun-coon-bad-joke-eel-467195.jpeg",
					"http://www.quickmeme.com/img/11/11f3af8f7af83a4a3bf345e5f49ada1129ef5c1afe7f898f9db512d6e6cf8796.jpg");

$foot = array("solo es divertido si sabes ingles",
				"solo es divertido si sabes Ingles",
				"not even the slow death of our plantet will make this less funny",
				"broma mala",
				"esta es buena",
				"never not funny",
				"hahahahahhahahahahahahhaah");

$chistes = "";

for($i=0; $i<6; $i++ ){
	$classe = "miClase";
	if($i%2==0){
		$classe = "miClase2";
	}
	
	$chistes = $chistes . "<a href='#'><div class = '$classe' >
			<div style class= 'encabezado'>
			<h3>$cabezeraChiste[$i]</h3>
			</div><br>
			<img  class='miOtraClasse' src ='$urlChiste[$i]' alt = 'tigre' >
			<div style = 'max-width: 200px'><br><span>$foot[$i]</span></div>
		</div>
	</a>";
}

echo"
<!DOCTYPE HTML>
<html>
	<head>
		<link rel='stylesheet' href='estilo.css'>
		<script src='script.js'></script>
	</head>
	<body>
	$chistes
	</body>
</html>";
?>