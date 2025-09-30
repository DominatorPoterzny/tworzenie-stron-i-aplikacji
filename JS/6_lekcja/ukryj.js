
const p = document.querySelector("p")
const ukryj = document.querySelector("#ukryj")
const pokaz = document.querySelector("#pokaz")
const body = document.querySelector("body")


body.addEventListener('change', log)
function lagkey(a) {
	p.innerHTML = a.key
	console.log('Klawisz ' + a.code)
	// p.innerHTML = e.code
}
