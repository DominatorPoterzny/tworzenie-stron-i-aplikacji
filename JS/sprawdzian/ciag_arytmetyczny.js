let btn = document.querySelector('#btn')
let p1 = document.querySelector('#p1')
let ul = document.querySelector('ul')


let input = document.querySelectorAll('input')
// const a1 = document.querySelector('#a1').value
// const a2 = document.querySelector('#a2').value
// const n = document.querySelector('#n').value

btn.addEventListener('click', event => {
	if (input[0].value === '' || input[1].value === '' || input[2].value === '') {
        p1.innerHTML= `Podaj liczby jeszcze raz`
	} else {
        p1.innerHTML= ` `
        let r = "${input[1].value}-${input[0].value}"
		console.log(input[0].value)
		console.log(input[1].value)
		console.log(input[2].value)
		console.log(r)
        for (let i = 0; i = input[2]; i++) {
    
            
        }
	}

})
