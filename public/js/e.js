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
            result = input.value*655,.75;
            break;
        case "NGN":
            result = input.value*475.23;
            break;
        case "USD":
            result = input.value*1.14;
            break;
        case "RUP":
            result = input.value*85.37;
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
            result = input.value/655.75;
            break;
        case "NGN":
            result = input.value*0.73;
            break;
        case "USD":
            result = input.value*0.0017;
            break;
        case "RUP":
            result = input.value*0.13;
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
            result = input.value/1.14;
            break;
        case "NGN":
            result = input.value*416.38;
            break;
        case "CFA":
            result = input.value/0,0017;
            break;
        case "RUP":
            result = input.value*85.40;
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
            result = input.value/476.23;
            break;
        case "CFA":
            result = input.value/0.73;
            break;
        case "USD":
            result = input.value/416.38;
            break;
        case "RUP":
            result = input.value*0.18;
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
            result = input.value/476.23;
            break;
        case "NGN":
            result = input.value/0.18;
            break;
        case "USD":
            result = input.value/85.40;
            break;
        case "CFA":
            result = input.value/85.37;
            break;
        default: output.value = input.value;
            break;
    }output.value = result;
}
}
