const value = document.querySelector('#p_godz')
const value2 = document.querySelector('#p_min')
const input = document.querySelector('#godz')
const input2 = document.querySelector('#min')
const wynik = document.querySelector('#wynik')
value.innerText = input.value
value2.innerText = input2.value
let obliczenia = 30 * `${input.value}` - (11 / 2) * `${input2.value}`
input.addEventListener('input', event => {
	value.innerText = event.target.value
    let obliczenia = 30 * `${input.value}` - (11 / 2) * `${input2.value}`
    wynik.innerHTML = obliczenia +`&#176;`

})
input2.addEventListener('input', event2 =>{
    value2.innerText = event2.target.value
    let obliczenia = 30 * `${input.value}` - (11 / 2) * `${input2.value}`
    wynik.innerHTML = obliczenia+`&#176;`
    
})



 