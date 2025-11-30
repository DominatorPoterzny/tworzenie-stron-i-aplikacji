let blok1 = document.querySelector('.blok1')
let blok2 = document.querySelector('.blok2')
let blok3 = document.querySelector('.blok3')
let sekcja1 = document.querySelector('.sekcja1')
let sekcja2 = document.querySelector('.sekcja2')
let sekcja3 = document.querySelector('.sekcja3')

function pokazblok1(){
    blok1.style.backgroundColor ="MistyRose"
    blok2.style.backgroundColor ="#FFAEA5"
    blok3.style.backgroundColor = '#FFAEA5'
    sekcja1.style.display = "block"
    sekcja2.style.display = "none"
    sekcja3.style.display = "none"
}
function pokazblok2() {
	blok2.style.backgroundColor = 'MistyRose'
	blok1.style.backgroundColor = '#FFAEA5'
	blok3.style.backgroundColor = '#FFAEA5'
	sekcja2.style.display = 'block'
	sekcja1.style.display = 'none'
	sekcja3.style.display = 'none'
}
function pokazblok3() {
	blok3.style.backgroundColor = 'MistyRose'
	blok2.style.backgroundColor = '#FFAEA5'
	blok1.style.backgroundColor = '#FFAEA5'
	sekcja3.style.display = 'block'
	sekcja2.style.display = 'none'
	sekcja1.style.display = 'none'
}