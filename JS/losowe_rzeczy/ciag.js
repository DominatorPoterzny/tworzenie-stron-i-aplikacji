let field = document.querySelector('fieldset')
let a1 = 5
let q = 7
for (let i = 1; i <= 7; i++) {
	let p1 = document.createElement('p')
	let x = ', '
    let y = '.'
	let an = a1 * Math.pow(q, i - 1)
    console.log(i)
	if (i === 7) {
		p1.innerHTML = `${an}. `
        field.appendChild(p1)
        // console.log(i)
	}else{
		p1.innerHTML = `${an}, `
		field.appendChild(p1)
        // console.log(i)
		// p1.innerHTML = `${i}${x}`
		// field.appendChild(p1)
	}
}
