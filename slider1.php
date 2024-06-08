<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="slider/css/novo-slider.css">
    <link rel="stylesheet" type="text/css" href="slider/css/meu-slider.css">
    

    <script src="slider/js/jquery-3.3.1.min.js"></script>
    <script src="slider/js/jquery.novo.slider.js"></script>

    <script type="text/javascript">
        $(window).on('load',function(){
           $('#slider').nivoSlider();
        });
    </script>
</head>
<body>
    <div class="slider-wrapper theme-meu-slider">
        <div id="slider" class="nivoSlider">
            <img src="img/slider.png" title="#htmlcaption">
            <img src="img/slider1.png" title="#htmlcaption1">
            <img src="img/slider2.png" title="#htmlcaption2">                             
        </div>    
        <div id="htmlcaption1" class="nivo-html-caption">     
            <h1>
                
            </h1>
            <!--
            <h2>
                As cortinas fazem parte da decoração da sua casa, você pode brincar com cores, texturas e tipos diferentes de cortinas, e com isso criar ambientes únicos e extremamente sofisticados.
            </h2>
            -->
        </div>

        <div id="htmlcaption2" class="nivo-html-caption">     
            <h1>
                                            
            </h1>
            <!--
            <h2>
                Além de oferecer proteção contra os efeitos nocivos dos raios solares, ainda funcionam como artigo decorativo, para tornar os ambientes residenciais e comerciais mais aconchegantes.
            </h2>
            -->
        </div>

        <div id="htmlcaption2" class="nivo-html-caption">     
            <h1>
                                            
            </h1>
            <!--
            <h2>
                Além de oferecer proteção contra os efeitos nocivos dos raios solares, ainda funcionam como artigo decorativo, para tornar os ambientes residenciais e comerciais mais aconchegantes.
            </h2>
            -->
        </div>
        
    </div>

</body>
</html>