
const p = document.querySelector("p")
const ukryj = document.querySelector("#ukryj")
const pokaz = document.querySelector("#pokaz")
// const input = document.querySelector("input")
// const body = document.querySelector("body")


ukryj.addEventListener('change', log)
function log(a) {
	p.style.display = 'none'
	console.log("ukryj")
}
pokaz.addEventListener('change', loga)
function loga(e) {
	p.style.display = 'block'
	console.log("pokaz")
}