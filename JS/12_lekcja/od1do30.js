let liczba = document.querySelector('.liczba')
let btn = document.querySelector('button')
let p1 = document.querySelector('.p1')
let p2 = document.querySelector('.p2')
let p3 = document.querySelector('.p3')
let p4 = document.querySelector('.p4')

btn.addEventListener('click', () => {
	let losowa = Math.floor(Math.random() * 30 + 1)
	liczba.innerHTML = liczba.innerHTML = `${losowa}`

	if (losowa >= 20) {
		p2.innerHTML = p2.innerHTML = `Wylosowana liczba jest większa lub równa 20`
	} else{
        p2.innerHTML = p2.innerHTML = " "
    } 
    if (losowa % 2 == 0) {
		p3.innerHTML = p3.innerHTML = `Wylosowana liczba jest parzysta`
	} else {
		p3.innerHTML = p3.innerHTML = `Wylosowana liczba jest nieparzysta`
	}
    if(losowa <=10){
        p4.innerHTML = p4.innerHTML = `Pierwsza dziesiątka`
    } else if(losowa >= 11,losowa <=20){
        p4.innerHTML = p4.innerHTML = `Druga dziesiątka`
    }else{
        p4.innerHTML = p4.innerHTML = `Trzecia dziesiątka`
    }
})
