const h = document.querySelector('#number')
const p1 = document.querySelector('#liczba1')
const p2 = document.querySelector('#liczba2')
const p3 = document.querySelector('#liczba3')
const p4 = document.querySelector('#liczba4')
const p5 = document.querySelector('#liczba5')
const p6 = document.querySelector('#liczba6')
const p7 = document.querySelector('#liczba7')
const p8 = document.querySelector('#liczba8')

const p11 = document.querySelector('#wynik1')
const p12 = document.querySelector('#wynik2')
const p13 = document.querySelector('#wynik3')
const p14 = document.querySelector('#wynik4')
const p15 = document.querySelector('#wynik5')
const p16 = document.querySelector('#wynik6')
const p17 = document.querySelector('#wynik7')
const p18 = document.querySelector('#wynik8')
const btn = document.querySelector('#btn')

const liczba = prompt(`Podaj liczbe:`)
    if(isNaN(liczba)){
        alert(`To nie jest liczba`)
    }
 
h.innerHTML = `Podana liczba: ${liczba}`

p1.innerHTML = (`${liczba}`)
p11.innerHTML = Math.abs(`${liczba}`)

p12.innerHTML = Math.ceil(`${liczba}`)
p2.innerHTML = (`${liczba}`)

p13.innerHTML = Math.floor(`${liczba}`)
p3.innerHTML = (`${liczba}`)

p14.innerHTML = Math.max(`${liczba}`)
p4.innerHTML = (`${liczba}`)

p15.innerHTML = Math.min(`${liczba}`)
p5.innerHTML = (`${liczba}`)

p16.innerHTML = Math.pow(`${liczba}`, 2)
p6.innerHTML = (`${liczba}`)

p17.innerHTML = Math.round(`${liczba}`)
p7.innerHTML = (`${liczba}`)

p18.innerHTML = Math.sqrt(`${liczba}`)
p8.innerHTML = `${liczba}`

btn.addEventListener('click' , log)
function log(a){
    window.location.reload()
}