let odp = document.querySelectorAll('.odp1')
let ukr = ['lag', 'aimbot', 'loot', 'noob', 'fanboy', 'hitbox', 'camping', 'respawn']
let pod = document.querySelectorAll('.pod')
let pod1 = document.querySelectorAll('.pod1')
let span = document.querySelectorAll('.ukryte')
console.log(ukr)
console.log(odp)
console.log(pod)

pod.forEach((element, i) => {
	element.klik = 0;
	console.log(element.klik)
    const gwiazda = '*'.repeat(ukr[i].length)
	element.addEventListener('click', function () {
		element.klik++
		if (element.klik === 1) {
			element.innerHTML = '&blk34;';
			pod1[i].innerHTML = `${gwiazda} (${ukr[i].length}) `;
			element.klik++;
			console.log(element.klik)
		}else if (element.klik === 2) {
			element.innerHTML = '&blk12;';
			pod1[i].innerHTML = `${ukr[i][0]}${gwiazda.slice(1)} (${ukr[i].length}) `
			element.klik++;
			console.log(element.klik)
		}else if (element.klik === 3) {
			element.innerHTML = '&blk14;';
			pod1[i].innerHTML = `${ukr[i]}${gwiazda.slice(1)} ${gwiazda.slice(-1)}(${ukr[i].length}) `
			element.klik++;
			console.log(element.klik)
		}
        
	}); 
});

odp.forEach((element, i) => {
	element.addEventListener('click', log)
	function log(a) {
		const odpo = prompt(`Podaj odpowiedz na pytanie ${i + 1}:`)
		if (odpo === ukr[i]) {
			alert(`Twoja odpowiedz jest poprawna`)
			odp[i].style.display = 'none'
			span[i].style.display = 'inline'
			span[i].style.fontWeight = 'bold'
		} else {
			alert(`Twoja odpowiedz jest zła`)
		}
	}
})
