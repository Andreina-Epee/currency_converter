<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>currency_converter</title>


    </head>
    <body class="antialiased">
        <link rel="stylesheet" href="{{asset("css/de.css")}}">
        <!--<script src="{{asset("js/e.js")}}"></script>-->
    </head>
    <body>
        <header>
            <nav><div id="boule"><img src="../boule.png">
                <h4>Denise</h4></div></nav>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Convertisseur de Devises</span><br>
            </h1>
        </header>
            <div class="container">
                <p class="site-heading-lower">Offre de services</p>
                <aside class="green">
                <input type="text" value="0" id="input" class="input" oninput="curconvert()"/>
                    <select name="" id="insel" class="input" onchange="curconvert()">
                        <option value="CFA">Francs</option>
                        <option value="RUP">Indian Rupee</option>
                        <option value="EUR">Euro</option>
                        <option value="USD">United States Dollars</option>
                        <option value="NGN">Naira</option>
                    </select><br>
                <input type="text" value="0" class="input" id="output" readonly/>
                    <select name="" id="outsel" class="input" onchange="curconvert()">
                        <option value="EUR">Euro</option>
                        <option value="RUP">Indian Rupee</option>
                        <option value="CFA">Francs</option>
                        <option value="USD">United States Dollars</option>
                        <option value="NGN">Naira</option>
                    </select>
                </aside>
                    <footer class="footer text-faded text-center py-5">
                        <div class="container"><p class="m-0 small">Copyright &copy; Denise</p></div>
                    </footer>
            </div>
            <script>
    var result;
    var input =
document.querySelector("#input");
    var output =
document.querySelector("#output");
    var insel =
document.querySelector("#insel");
    var outsel =
document.querySelector("#outsel");

function curconvert(){
    if(insel.value =="EUR"){
        switch(outsel.value){
            case "EUR":
                result =input.value;
                break;
            case "FCA":
                result = input.value * 565.75;
                break;
            case "NGN":
                result = input.value * 475.23;
                break;
            case "USD":
                result = input.value * 1.14;
                break;
            case "RUP":
                result = input.value * 85.37;
                break;
            default: output.value = input.value;
                break;
        }output.value = result;
    }

    if(insel.value =="CFA"){
        switch(outsel.value){
            case "CFA":
                result =input.value;
                break;
            case "EUR":
                result = input.value / 655.75;
                break;
            case "NGN":
                result = input.value * 0.73;
                break;
            case "USD":
                result = input.value * 0.0017;
                break;
            case "RUP":
                result = input.value * 0.13;
                break;
            default: output.value = input.value;
                break;
        }output.value = result;
    }
    if(insel.value =="USD"){
        switch(outsel.value){
            case "USD":
                result =input.value;
                break;
            case "EUR":
                result = input.value / 1.14;
                break;
            case "NGN":
                result = input.value * 416.38;
                break;
            case "CFA":
                result = input.value / 0,0017;
                break;
            case "RUP":
                result = input.value * 85.40;
                break;
            default: output.value = input.value;
                break;
        }output.value = result;
    }
    if(insel.value =="NGN"){
        switch(outsel.value){
            case "NGN":
                result =input.value;
                break;
            case "EUR":
                result = input.value / 476.23;
                break;
            case "CFA":
                result = input.value / 0.73;
                break;
            case "USD":
                result = input.value / 416.38;
                break;
            case "RUP":
                result = input.value * 0.18;
                break;
            default: output.value =input.value;
                break;
        }output.value = result;
    }
    if(insel.value =="RUP"){
        switch(outsel.value){
            case "RUP":
                result =input.value;
                break;
            case "EUR":
                result = input.value / 476.23;
                break;
            case "NGN":
                result = input.value / 0.18;
                break;
            case "USD":
                result = input.value / 85.40;
                break;
            case "CFA":
                result = input.value / 85.37;
                break;
            default: output.value = input.value;
                break;
        }output.value = result;
    }
}

            </script>

    </body>
</html>
