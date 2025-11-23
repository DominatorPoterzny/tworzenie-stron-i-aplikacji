let field = document.querySelector('fieldset')
let a1 = 1
let q = 8
for (let i = 1; i <= 999; i++) {
	let p1 = document.createElement('p')
	let x = ', '
    let y = '.'
	let an = a1 * Math.pow(q, i - 1)
    console.log(i)
    console.log(an)
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
