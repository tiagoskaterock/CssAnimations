<!DOCTYPE html>
<html>
<head>
<style> 
body{
	background: lightblue;
	animation-name: ceu_muda;
	animation-duration: 30s;
}
#sol {
	position: fixed;
	width: 100px;
	height: 100px;
	background-color: orange;
	animation-name: sol_move;
	animation-duration: 30s;
	border-radius: 50px;
	margin-top: 50px;
	margin-left: -200px;
}
#chao{
	background: lightgreen;
	position: fixed;
	left: 0px;
	width: 100%;
	height: 300px;
	bottom: 0px;
	animation-name: chao_muda;
	animation-duration: 30s;
}
#pista{
	background: grey;
	position: fixed;
	left: 0px;
	width: 100%;
	height: 200px;
	bottom: 50px;
	animation-name: pista_muda;
	animation-duration: 30s;
}
#carro {
	width: 300px;
  	height: 100px;
  	background-color: red;
  	border-top-right-radius: 50px;
  	border-top-left-radius: 25px;
  	position: fixed;
  	bottom: 130px;
  	animation-name: carro_anda;
	animation-duration: 30s;
}
#vidro {
	width: 280px;
  	height: 50px;
  	background-color: white;
  	border-top-right-radius: 45px;
  	border-top-left-radius: 20px;
  	position: fixed;
  	bottom: 170px;
  	left: 20px;
  	animation-name: vidro_anda;
	animation-duration: 30s;
}
#roda_frente {
	width: 60px;
  	height: 60px;
  	border-radius: 30px;
  	background-color: blue;
  	position: fixed;
  	bottom: 110px;
  	left: 220px;
  	animation-name: roda_frente_anda;
	animation-duration: 30s;
}
#roda_tras {
	width: 60px;
  	height: 60px;
  	border-radius: 30px;
  	background-color: blue;
  	position: fixed;
  	bottom: 110px;
  	left: 40px;
  	animation-name: roda_tras_anda;
	animation-duration: 30s;
}
@keyframes sol_move {
  	from {
	  	margin-left: 1400px;
	  	margin-top: 50px;
	}
    to {
	  	margin-left: -200px;
	  	margin-top: 100px;
    }
}

@keyframes ceu_muda {
  	from {
	  	background: lightblue;
	}
    to {
	  	background: blue;;
    }
}

@keyframes chao_muda {
  	from {
	  	background: lightgreen;
	}
    to {
	  	background: green;
    }
}

@keyframes pista_muda {
  	from {
	  	background: grey;
	}
    to {
	  	background: black;
    }
}

@keyframes carro_anda {
  	from {
	  	left: 20px;
	}
    to {
	  	left: 1400px;
    }
}

@keyframes vidro_anda {
  	from {
	  	left: 30px;
	}
    to {
	  	left: 1410px;
    }
}

@keyframes roda_frente_anda {
  	from {
	  	left: 220px;
	}
    to {
	  	left: 1620px;
    }
}

@keyframes roda_tras_anda {
  	from {
	  	left: 40;
	}
    to {
	  	left: 1420px;
    }
}

</style>
</head>
<body>

	<div id="sol"></div>

	<div id="chao"></div>

	<div id="pista"></div>

	<div id="carro"></div>

	<div id="roda_frente"></div>

	<div id="roda_tras"></div>

	<div id="vidro"></div>



</body>
</html>
