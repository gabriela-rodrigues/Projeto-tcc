function mostrarTela(el) {
    var display = document.getElementById(el).style.display;
    if(display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
    
}
function fecharTela(el) {
    var tela = window.document.getElementById(el)
    
    tela.style.display = "none"
}
function mudarCorPlano(el){
    var plano = window.document.getElementsById(el).style
    
    plano.backgroundColor = 'red'
}

