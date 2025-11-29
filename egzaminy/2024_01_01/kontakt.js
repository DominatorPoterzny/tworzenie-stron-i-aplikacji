let input = document.querySelectorAll('input')
let wiadomosc = document.querySelector('#zgloszenie')
let nowa_wiadomosc = document.querySelector('#wiadomosc')

function przeslij() {
	if (input[3].checked == true) {
        nowa_wiadomosc.innerHTML = `<span>${input[0].value} ${input[1].value}</span><br> Treść twojej sprawy: ${wiadomosc.value}`
	} else {
		nowa_wiadomosc.innerText = `Musisz zapoznać się z regulaminem`
	}
	
}
