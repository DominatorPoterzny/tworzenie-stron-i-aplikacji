let pierwszy_blok = document.querySelector("#pierwszy_blok")
let drugi_blok = document.querySelector("#drugi_blok")
let trzeci_blok = document.querySelector("#trzeci_blok")



function pierwsza_zmiana(){
    pierwszy_blok.style.visibility = 'hidden'
    drugi_blok.style.visibility = 'visible'  
}
function druga_zmiana(){
    drugi_blok.style.visibility = 'hidden'
    trzeci_blok.style.visibility = 'visible'  
}
function trzecia_zmiana(){
    let haslo = document.querySelector("#haslo")
    let haslo_powtorz = document.querySelector("#haslo2")
    if(haslo.value == haslo_powtorz.value){
        let imie = document.querySelector("#imie").value
        let nazwisko = document.querySelector("#nazwisko").value
        console.log(`Witaj ${imie} ${nazwisko}`)
    }else{
        console.log(haslo.value)
        console.log(haslo_powtorz.value)
        alert("Podane hasła różnią się")
    }
}
