let p1 = document.querySelector('#p1')
let p2 = document.querySelector('#p2')
let miesiac = Math.floor(Math.random()* 15 + 1)
p1.innerHTML = `${miesiac}`
switch (miesiac) {
	case 1:
	case 2:
	case 3:
		p2.innerHTML = `I kwartał`
        break
	case 4:
	case 5:
	case 6:
		p2.innerHTML = `II kwartał`
        break
	case 7:
	case 8:
	case 9:
		p2.innerHTML = `III kwartał`
        break
	case 10:
	case 11:
	case 12:
		p2.innerHTML = `IV kwartał`
        break
    default:
        p2.innerHTML = `Błędny numer miesiąca`
}
