//JavaScript de contagem regresiva para encerrar sessão
var tempo = new Number();
// Tempo em segundos
tempo = 3600;
function startCountdown() {
    // Se o tempo não for zerado
    if ((tempo - 1) >= 0) {
        // Pega a parte inteira dos minutos
        var min = parseInt(tempo / 60);
        // Calcula os segundos restantes
        var seg = tempo % 60;
        // Formata o número menor que dez, ex: 08, 07, ...
        if (min < 10) {
            min = "0" + min;
            min = min.substr(0, 2);
        }
        if (seg <= 9) {
            seg = "0" + seg;
        }
        // Cria a variável para formatar no estilo hora/cronômetro
        horaImprimivel =  + min + ':' + seg;
        //JQuery pra setar o valor
        $("#sessao").html(horaImprimivel);
        // Define que a função será executada novamente em 1000ms = 1 segundo
        setTimeout('startCountdown()', 1000);
        // diminui o tempo
        tempo--;
        // Quando o contador chegar a zero faz esta ação
    } else {
        window.open('Controlador/sairController.php', '_self');
    }
}
// Chama a função ao carregar a tela
startCountdown();
//Função para Desabilitar a tecla F5 e  CTRL + F5
document.onkeydown = function () {
    switch (event.keyCode) {
        case 116 :
            event.returnValue = false;
            event.keyCode = 0;
            return false;
        case 82 :
            if (event.ctrlKey) {
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
    }
};

//Função pra desabiliatr o botão direito do mouse
function click() {
    if (event.button === 2 || event.button === 3) {
        oncontextmenu = 'return false';
    }
}
document.onmousedown = click;
document.oncontextmenu = new Function("return false;");