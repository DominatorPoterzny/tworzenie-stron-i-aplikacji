let img = document.querySelectorAll('img')

function transformacja1() {
	let blur = document.querySelector('#blur')
	let sepia = document.querySelector('#serpia')
	let negatyw = document.querySelector('#negatyw')

	if (blur.checked == true) {
		img[0].style.filter = `none`
		img[0].style.filter = `blur(5px)`
	} else if (sepia.checked == true) {
		img[0].style.filter = `none`
		img[0].style.filter = `sepia(100%)`
	} else if (negatyw.value == `on`) {
		img[0].style.filter = `none`
		img[0].style.filter = `invert(100%)`
	}
}
function kolor() {
	// img[0].style.filter = `none`
	img[1].style.filter = `grayscale(0%)`
}
function czarno_bialo() {
	img[1].style.filter = `none`
	img[1].style.filter = `grayscale(100%)`
}
function przezroczystosc() {
	let wartosc = document.querySelector('#owoce').value
	img[2].style.opacity = `${wartosc}%`
}
function jasnosc() {
	let wartosc2 = document.querySelector('#zolw').value

	img[3].style.filter = `brightness(${wartosc2}%)`
}
