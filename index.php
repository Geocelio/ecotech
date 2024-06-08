
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="descripion" content="Barros | Manutenções industrias">
	<meta name="keywords" content="geocelio.com.br">
	<meta name="robots" content="index, follow">
	<title>Ecotech | Higienização Profissional </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/font-awesome.min.css" rel="stylesheet"/>      
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!--  link para fonts do google -->
   <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">
    <!-- fim do link para fonts do google -->
    
</head>
<body>
    <div id="pagina-geral">
        <div id="layout">
             <div id="campo-menu">
                <div class="campo-menu"><?php include "menu.php";?></div>
            </div> 
            <div id="logomarca">
                <div class="logomarca"><a href="index.php"> <img src="img/logomarca-eco1.png" title="Ecotech"> </a></div>                
            </div>                                 
        </div>

        <div id="texto1-slider">
            <div id="texto1"> 
                <span class="cor-gradiente">Dry cleaning </span> Cleaning Specialist services<br>
                <span class="cor-gradiente">Upholstery cleaning</span> Ask for your free quote now!
            </div>
            <div id="campo-slider"> 

                <?php 
                    foreach ($_REQUEST as $___opt => $___val) {
                        $$___opt = $___val;
                    }
                    if(empty($barros)) {
                        include("home.php");
                    }
                    elseif(substr($pagina, 0, 6)=='http' or substr($barros, 
                    0, 1)=="/" or substr($barros, 0, 1)==".") 
                   {
                        echo '<br><font face=arial size=11px><br><b>A p?gina n?o existe.</b><br>Selecione uma p?gina a partir do Menu Principal. </font>'; 
                    }
                    else {
                        include("$barros.php");
                    }
                ?>

            </div>                
        </div>

        <div id="campo-icons">
            <div id="icons">
                <div id="icon-a" class="con-i"> 
                    <i class="fa fa-envelope-o"></i> Email: empresa@hotmail.com
                </div>
                <div id="icon-b" class="con-i"> 
                    <i class="fa fa-whatsapp"></i> <a href="#"> WhatsApp: 85 99999 9999 </a> 
                </div>
                <div id="icon-c" class="con-i">
                    <i class="fa fa-phone"></i> <a href="#"> Celular: 85 9999 9999 </a>
                </div>
            </div>
        </div>

        <div id="campo-vazio">
            
        </div>

        <div id="rodape">
            <div id="rod-right">
                <div id="empresa" class="cor-gradiente"> Higienização Profissional </div>
                <div id="texto-empresa">
                    This type of care is extremely important to maintain good looks and to avoid problems even with your own health. Want to know the benefits of cleaning upholstery? Check out this special text that we have prepared for you! <br>
                </div>
            </div>

            <div id="rod-left">
                <div id="barros" class="cor-gradiente"> Ecotech  </div>
                <div id="endereco">
                    <!-- <span class="cor-gradiente"><i class="fa fa-map-marker"></i></span>-->  
                    <i class="fa fa-map-marker"></i> 
                    Endereço rua abc número 316, Bairo São Pedro 1<br>
                    Cidade/Ce.<br> 
                    Cep 60.000-000. <br> 
                    CNPJ 00.000.000/0001-00   
                </div>
            </div>            
        </div>

        <div id="copy">© Copyright 2020 | Todos os direitos reservados </div>
        
    </div>
   
</body>
</html>
