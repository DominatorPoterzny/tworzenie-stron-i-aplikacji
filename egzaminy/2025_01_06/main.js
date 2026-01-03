let binarna = ''

function przelicz(){
    
    let liczba = document.querySelector('#liczby').value
    let wynik = document.querySelector('#wynik')
    
    while(liczba != 0){
    binarna.push = (liczba % 2)+binarna
    
    liczba = Math.floor(liczba/2)
    }if(liczba==0){
        console.log(binarna)
        for (let i = 0; i <= binarna.length; i++) {
                wynik.innerHTML = binarna
            
        }
    }
}