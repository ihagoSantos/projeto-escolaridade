<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link rel="stylesheet" href="css/stylelmts.css">
</head>
<body>
    <!-- Footer Brasil-->
    <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
            <ul id="menu-barra-temp" style="list-style:none;">
                <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
                    <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
                </li>
                <li>
                    <a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
                </li>
            </ul>
        </div>


    <!-- Barra de Logos -->
    <div id="barra-logos" class="barra-logos" style="background:#FFFFFF; margin-top: 1px; height: 200px; padding: 10px 0 10px 0">
            <ul id="logos" style="list-style:none;">
                <li style="margin-right:140px; margin-left:110px; border-right:1px">
                    <a href="#"><img src="{{asset('images/extraVestibular.png')}}" style = "margin-left: 8px; margin-top:5px " height="170px" align = "left" ></a>
        
                    <a target="_blank" href="#"><img src="{{asset('images/lmts3.png')}}" style = "margin-left: 8px; margin-top:65px " height="80" align = "right" ></a>
        
                    <img src="{{asset('images/separador.png')}}" style = "margin-left: 15px; margin-top: 65px" height="70" align = "right" >
                    <a target="_blank" href="#"><img src="{{asset('images/uag.png')}}" style = "margin-left: 10px; margin-top: 65px" height="80" width="70" align = "right" ></a>
        
                    <img src="{{asset('images/separador.png')}}" style = "margin-left: 15px; margin-top: 65px" height="70" align = "right" >
                    <a target="_blank" href="#"><img src="{{asset('images/ufrpe.png')}}" style = "margin-left: 15px; margin-right: -10px; margin-top: 65px " height="80" width="70" align = "right"></a>
                </li>
            </ul>
        </div>
    @yield('conteudo')
</body>

<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
</html>