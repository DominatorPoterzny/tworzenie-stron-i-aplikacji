// function obramowanie(){
//     this.style.borderTop = 'black 2px solid'
// }

let img = document.querySelectorAll('.img')
let p = document.querySelector('#p1')
let span1 = document.querySelector('#span1') 
let span2 = document.querySelector('#span2') 
let span3 = document.querySelector('#span3') 
let span4 = document.querySelector('#span4') 
let span5 = document.querySelector('#span5') 
let span6 = document.querySelector('#span6') 
let span = document.querySelectorAll('span')
img.forEach((element, i) => {
	let licznik = 0
	element.addEventListener('click', log)
	function log() {
        licznik++
		if (licznik === 1) {
			element.style.border = '1px solid '
			element.style.borderRadius = '8px'
			element.style.boxShadow = '0px 0px 10px black'
			// console.log(licznik)
			console.log(i)
			
            span[i].innerHTML=`${element.title} <br>`

			
		}
	}

	element.addEventListener('click', loga)
	function loga() {
		if (licznik === 2) {
			element.style.border = 'none'
			element.style.borderShadow = 'none'
            element.style.boxShadow = 'none'
			// console.log(licznik)
			licznik = licznik - 2
			console.log(licznik)
			span[i].innerHTML = ""	
		}
	}
})


