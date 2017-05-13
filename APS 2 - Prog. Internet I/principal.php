
<html> 
<head>

<meta charset='utf-8'>

 <title>APS 2 - Cálculo IMC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="utf-8">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                crossorigin="anonymous" media="screen">
                <link href="css/style.css" rel="stylesheet" media="screen" />
                <script type="text/javascript" src="js/functions.js">
                                
                </script>
                <script type="text/javascript" src="js/jquery.js">
                                
                </script>
                <script type="text/javascript" src="js/inc_jquery.js">
                </script>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <img src="imagens/logo_fecomercio_senac.png" class="img-responsive imagem-header"
                        alt="Fecomércio - SenacRS" title="Fecomércio - SenacRS">
    </div>
  </div>

    <div class="row">
        <div class="col-md-12">
         <h1 class="titulo">
            Calcule seu IMC
            </br>
            <small class="sub-titulo">
                Índice de Massa Corporal (IMC)
            </small>
        </h1>   
        </div>

        <div class="col-md-12">
         <p class="texto">
            O Índice de Massa Corporal (IMC) é reconhecido como padrão internacional
            para avaliar o grau
            </br>
            de obesidade. O IMC é calculado dividindo o peso (em kg) pela altura ao
            quadrado (em m).
            </br>
            </br>
           
        </p>    
        </div>
 	<div class="col-md-12 mostra-dados">
	        <?php

		include_once("calculos.php");

		$nome 	= $_POST['nome'];
		$nasc 	= $_POST['nasc'];
		$sexo	= $_POST['sexo'];
		$peso	= $_POST['peso'];
		$altura = $_POST['altura'];
		
		if($nome == null || $nasc == null || $sexo == "selecione" || $peso == null || $altura == null){

			header("Location: index.php");

		} else {

			$calculos = new Calculos();

			$calculos->mostrarTodasInformacoes($nome, $nasc, $sexo, $peso, $altura);

		}

	?>
	<a href="index.php" class="btn btn-voltar"> <button> VOLTAR </button> </a>

	</div>
</div>
</body>
</html>