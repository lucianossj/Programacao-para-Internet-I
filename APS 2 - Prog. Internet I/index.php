<!DOCTYPE html>
<html>
<head>
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
            <i>
                Utilize os campos abaixo para calcular o seu IMC:
            </i>
        </p>    
        </div>

        <div class="col-md-12">
         <form action="principal.php" id="imc" method="post" onSubmit="return formIsOk(this)">
            <!-- div nome -->
            <div class="nome">
                <label for="nome">
                    Nome:
                </label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
            </div>
            <!-- fim div nome -->
            <!-- div data de nascimento -->
            <div class="data-nasc">
                <label for="data nascimento">
                    Data de nascimento:
                </label>
                <input type="date" name="nasc" placeholder="Digite sua data de nascimento"
                class="cor-data" >
                <small class="exemplo-data">
                    <i>
                        Exemplo: xx/xx/xxxx 
                </small>
            </div>
            <!-- fim div data de nascimento -->
            <!-- div selecione o sexo -->
            <div class="escolha-sexo">
                <label for="escolha-sexo">
                    Sexo:
                </label>
                <select class="form-control" name="sexo">
                    <option value="selecione">
                        Selecione...
                    </option>
                    <option value="Masculino">
                        Masculino
                    </option>
                    <option value="Feminino">
                        Feminino
                    </option>
                </select>
            </div>
            <!-- Fim div selecione o sexo -->
            <!-- div Calcula Peso -->
            <div class="Peso">
                <label for="Calcula-Peso">
                    Peso:
                </label>
                <input type="number" class="form-control" name="peso" placeholder="Digite seu peso atual">
            </div>
            <!-- Fim div Calcula Pesoa -->
            <!-- div Calcula Altura -->
            <div class="Altura">
                <label for="Calcula-Altura">
                    Altura:
                </label>
                <input type="number" step=0.01 class="form-control" name="altura" placeholder="Digite sua altura atual">
            </div>
            <!-- Fim div Calcula Altura -->
            <!-- div botões -->
            <div class="botoes">
                <input class="btn btn-default" type="submit" value="Calcular">
                <input class="btn btn-reset  " type="reset" name="limpar" value="Limpar Campos">
            </div>
            <!-- Fim div botões -->
        </form>
            
        </div>

     </div>
    <div class="row">
        <div class="col-md-12 rodape">
            <div class="container-fluid" id="container-rodape">
                <footer>
                    <p class="texto-rodape">
                Código desenvolvido por:
                </br>
                Luciano da Silva Junior e Vittório de Andrade Barella.
            </p>
            <p class="icones-linguagens">
                Linguagens utilizadas:
            </p>


            <img src="imagens/html.png" class="img-responsive imagem-html" alt="logo-html"
            title="logo-html">
    

    
            <img src="imagens/Java_Script.png" class="img-responsive imagem-Java_Script"
            alt="logo-Java_Script" title="logo-Java_Script">
    


            

    
            <img src="imagens/css.png" class="img-responsive imagem-css" alt="logo-css"
            title="logo-css">
    

    
            <img src="imagens/bootstrap.png" class="img-responsive imagem-bootstrap"
            alt="logo-bootstrap" title="logo-bootstrap">
    

    
            <img src="imagens/PHP.png" class="img-responsive imagem-PHP" alt="logo-PHP"
            title="logo-PHP">
    

    
    
                </footer>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type = "text/javascript" language = "JavaScript">

    function formIsOk(form){

        if(form.nome.value == "" || form.nasc.value == "" || form.sexo.value == "selecione" || form.peso.value == "" || form.altura.value == ""){
            alert("ERRO!!! \nPreencha todos os campos corretamente!");

            document.getElementByID("nome").focus();

            return false;

        } else {

            return true;

        }

    }

</script>