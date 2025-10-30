
let field = document.querySelector('fieldset')
let h3 = document.querySelector('h3')
let licznik = 0
for (let i = 100; i < 1000; i++) {
    let liczba = document.createElement('p')
	let setki = Math.floor(i / 100)
	let dziesiec = Math.floor((i % 100) / 10)
	let jeden = Math.floor(i % 10)
	

	field.append(liczba)
	liczba.innerHTML += `${i}`
	if (i === 999) {
		
        liczba.innerHTML += `.`
        
	} else {
		liczba.innerHTML += `, `
	}

		if (setki + dziesiec + jeden === 10) {
			licznik++
			liczba.style.color = 'red'
			liczba.style.fontWeight = 'bold'
			console.log(licznik)
			
		}
		h3.innerHTML = `Tyle jest liczb: ${licznik}`
		// if (setki + dziesiec + jeden == 10) {
		// 	// i.style.color= 'red'
		// 	console.log(setki + dziesiec + jeden)
		// 	// element.style.color = 'red'
        //     field[i].style=`color:  red`
		// } else {
		// 	console.log('dupa')
		// }
}

