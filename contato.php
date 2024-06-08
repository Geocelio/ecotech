<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>    
    <div id="contato">
        <div id="titulo-contato">Fale com a gente</div>
        <div id="texto-contato">
            <form  action="op_contato.php" method="post">
                <div>Nome:</div>
                <div><input type="text" name="nome" id="nome" size="35" required /></div>                
                <div>Contato:</div>
                <div>
                    <input type="text" name="ddd" id="ddd" size="2" required />
                    <input type="text" name="fone" id="fone" size="10" required />
                </div>               
                <div>Mensagem</div>
                <div>
                    <textarea name="mensagem" cols="35" rows="2" id="mensagem"></textarea>
                </div>
                <div class="texto-contato"><input type="submit" value=" Enviar " class="cor-botao" /></div>              
            </form>
        </div>       
    </div>
</body>
</html>