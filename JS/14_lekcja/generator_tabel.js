let btn = document.querySelector('#btn')
let table = document.querySelector('#table')
// let kol = document.querySelector('#kol1').value
// let wier = document.querySelector('#wier1').value
let input = document.querySelectorAll('input')
let kol = input[0].value
let wier = input[1].value
btn.addEventListener('click',log)
function log(){
    table.innerHTML = " "
    if ((input[0].value <= 500, input[1].value)<=500) {
		
        for (let i = 1; i <= input[1].value; i++) {
			    let tr = document.createElement('tr')
			// table.append(tr)
			    for (let a = 1; a <= input[0].value; a++) {
				    let td = document.createElement('td')
				    tr.appendChild(td)
				    td.innerHTML += `${i}|${a}`
			    }
			    table.appendChild(tr)
		    }
    }else{
        alert("Nie działa")
    }
}