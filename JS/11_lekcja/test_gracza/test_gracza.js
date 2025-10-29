let odp = document.querySelectorAll('.odp1')
let ukr = ['lag', 'aimbot', 'loot', 'noob', 'fanboy', 'hitbox', 'camping', 'respawn']
let pod = document.querySelectorAll('.pod')
let pod1 = document.querySelectorAll('.pod1')
let span = document.querySelectorAll('.ukryte')
console.log(ukr)
console.log(odp)
console.log(pod)

pod.forEach((element, i) => {
	let klik = 0
	console.log(klik)
	const gwiazda = '*'.repeat(ukr[i].length)
	element.addEventListener('click', function () {
		klik++
		if (klik === 1) {
			element.innerHTML = '&blk34;'
			pod1[i].innerHTML = `${gwiazda} (${ukr[i].length}) `
			console.log(klik)
		} else if (klik === 2) {
			element.innerHTML = '&blk12;'
			pod1[i].innerHTML = `${ukr[i][0]}${gwiazda.slice(1)} (${ukr[i].length})`
			console.log(klik)
		} else if (klik === 3) {
			element.innerHTML = '&blk14;'
			pod1[i].innerHTML = `${ukr[i][0]}${gwiazda.slice(1, -1)}${ukr[i].slice(-1)} (${ukr[i].length})`
			console.log(klik)
		}else if (klik === 4) {
			element.style.display = 'none'
			odp[i].style.display = 'none'
			pod1[i].innerHTML = `<strong>${ukr[i]}</strong>`

		}
	})
})

odp.forEach((element, i) => {
	element.addEventListener('click', log)
	function log(a) {
		const odpo = prompt(`Podaj odpowiedz na pytanie ${i + 1}:`)
		if (odpo === ukr[i]) {
			alert(`Twoja odpowiedz jest poprawna`)
			odp[i].style.display = 'none'
			span[i].style.display = 'inline'
			span[i].style.fontWeight = 'bold'
			pod[i].style.display = 'none'
			pod1[i].style.display = 'none'
		}else if(odpo === null){
			alert(`Twoja odpowiedz jest PUSTA`)
		} else {
			alert(`Twoja odpowiedz jest zła`)
		}
	}
})
