let blok_pierwszy = document.querySelector("#pierwszy")
let blok_drugi = document.querySelector("#drugi")
let blok_trzeci = document.querySelector("#trzeci")

function pokaz_pierwszy() {
    blok_pierwszy.style.display = 'block'
    blok_drugi.style.display = 'none'
    blok_trzeci.style.display = 'none'
}
function pokaz_drugi() {
    blok_drugi.style.display = 'block'
    blok_pierwszy.style.display = 'none'
    blok_trzeci.style.display = 'none'
}
function pokaz_trzeci() {
    blok_trzeci.style.display = 'block'
    blok_drugi.style.display = 'none'
    blok_pierwszy.style.display = 'none'
}

let input = document.querySelectorAll('input')
let pasek_postepu = document.querySelector('#postep')
let dlugosc = 4
function pasek() {
    if (dlugosc != 100) {
        dlugosc += 12
        pasek_postepu.style.width = `${dlugosc}%`
    }
}
function zatwierdz(){
//    console.log = ` ${input[0]}, `
   for (let i = 0; i < input.length; i++) {
    console.log(input[i].value)
    
   }
}
