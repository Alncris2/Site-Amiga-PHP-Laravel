
function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);

    if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
    }

}

function idade() {
    var data = document.getElementById("dtnasc").value;
    var dia = data.substr(0, 2);
    var mes = data.substr(3, 2);
    var ano = data.substr(6, 4);
    var d = new Date();
    var ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate();

    ano = +ano,
        mes = +mes,
        dia = +dia;

    var idade = ano_atual - ano;

    if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
        idade--;
    }
    return idade;
}


function exibe(i) {



    document.getElementById(i).readOnly = true;




}

function desabilita(i) {

    document.getElementById(i).disabled = true;
}
function habilita(i) {
    document.getElementById(i).disabled = false;
}


function showhide() {
    var div = document.getElementById("newpost");

    if (idade() >= 18) {

        div.style.display = "none";
    }
    else if (idade() < 18) {
        div.style.display = "inline";
    }

}


function PermiteNumeros() {
    var tecla = window.event.keyCode;
    tecla = String.fromCharCode(tecla);
    if (!((tecla >= "0") && (tecla <= "9"))) {
        window.event.keyCode = 0;
    }
}

var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Senhas diferentes!");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


function isNumber(el) {
    var reg = /[0-9]+/;
    if (reg.exec(el)) {
        return true;
    }
    return false;
}

$(document).ready(function () {
    $('#name').on('change', function () {
        var textoValida = $('#name').val();
        if (isNumber(textoValida)) {
            alert("Só utilize letras!");
            return false;
        }
    });
});

$(function () {
    $('#name').on('keypress', function () {
        $(this).val($(this).val().replace(/[0-9]+/g, ''))
    });
});

function validarCPF() {
    if (vercpf(document.frmcpf.cpf.value)) {
        document.frmcpf.submit();
    } else {
        errors = "1";
        if (errors)
            alert('CPF inválido');
        document.retorno = (errors == '');
    }
}

function vercpf(cpf) {
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;

    add = 0;

    for (i = 0; i & lt; 9; i++)
    add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i & lt; 10; i++)
    add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    alert('O CPF INFORMADO É VÁLIDO.');
    return true;
}

$j(document).ready(function () {

    $j("#meuForm").validate({
        rules: {
            NrCpf: { NrCpf: true, required: true }
        },
        messages: {
            NrCpf: { NrCpf: alert('CPF Inválido') }
        }
    });
});

function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
        testAPI();
    } else {                                 // Not logged into your webpage or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
            'into this webpage.';
    }
}


function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function (response) {   // See the onlogin handler
        statusChangeCallback(response);
    });
}


window.fbAsyncInit = function () {
    FB.init({
        appId: '{app-id}',
        cookie: true,                     // Enable cookies to allow the server to access the session.
        xfbml: true,                     // Parse social plugins on this webpage.
        version: '{api-version}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function (response) {   // Called after the JS SDK has been initialized.
        statusChangeCallback(response);        // Returns the login status.
    });
};


(function (d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function (response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
    });
}

jQuery(function ($) {
    function init_map1() {
        var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
        var mapOptions = {
            center: myLocation,
            zoom: 16
        };
        var marker = new google.maps.Marker({
            position: myLocation,
            title: "Property Location"
        });
        var map = new google.maps.Map(document.getElementById("map1"),
            mapOptions);
        marker.setMap(map);
    }
    init_map1();
});