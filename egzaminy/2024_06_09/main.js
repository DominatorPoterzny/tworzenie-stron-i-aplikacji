let aktywnezdj = document.querySelector('#aktywnezdj')
let licznik = 1
function nastepne() {
	if (aktywnezdj.src !== 7) {
		
        aktywnezdj.src = `${licznik}.jpg`
        licznik++
        console.log(licznik)
	}  else if (aktywnezdj.src === 7) {
        conso
		aktywnezdj.src = `1.jpg`
	}
}
