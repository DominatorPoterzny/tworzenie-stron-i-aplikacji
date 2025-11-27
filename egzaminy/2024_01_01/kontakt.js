let input = document.querySelectorAll('input')
let wiadomosc = document.querySelector('#zloszenie')
let nowa_wiadomosc = document.querySelector('#wiadomosc')

if(input[3].checked == true){
    
}
else{
    console.log("dupacyce")
}
function przeslij() {
    wiadomosc.innerHTML = `${input[0].value} ${input[1].value} <br>`
}