
let field = document.querySelectorAll('fieldset')

for (let i = 100; i < 1000; i++) {
    let liczba = document.createElement('p')
	let setki = Math.floor(i / 100)
	let dziesiec = Math.floor((i % 100) / 10)
	let jeden = Math.floor(i % 10)

	// field.innerHTML += `${i}`
	if (i === 999) {
		// field.innerHTML += `.`
        field.innerHTML += `${i}`
        field.appendChild(liczba)
	} else {
		field.innerHTML += `, `
	}

	
		
		// if (setki + dziesiec + jeden == 10) {
		// 	// i.style.color= 'red'
		// 	console.log(setki + dziesiec + jeden)
		// 	// element.style.color = 'red'
        //     field[i].style=`color:  red`
		// } else {
		// 	console.log('dupa')
		// }
	
}
