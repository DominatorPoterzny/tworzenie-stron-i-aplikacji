function oblicz(){
    let input1 = document.querySelector('#szerokosc').value
    let input2 = document.querySelector('#dlugosc').value

    let input3 = document.querySelector('#laminowane')
    let input4 = document.querySelector('#winylowe')
    let input5 = document.querySelector('#deska')
    

    let pole = input1*input2
    let p1 = document.querySelector('#p1')

    if(input1 == 0 && input2 == 0){
        p1.innerText = `Wprowadź poprawne dane`
    }else if(input1 !== 0 && input2 == 0){
         p1.innerText = `Wprowadź poprawne dane`
    }else if(input1 == 0 && input2 !== 0){
         p1.innerText = `Wprowadź poprawne dane`
    }
    else{

    if(input3.checked === true){
        let koszt = pole *12
        p1.innerText = `Pole powierzchni pomieszczenia: ${pole}, koszt montażu ${koszt} `
    }else if(input4.checked === true){
        let koszt = pole *14
        p1.innerText = `Pole powierzchni pomieszczenia: ${pole}, koszt montażu ${koszt} `
    }else if(input5.checked === true){
        let koszt = pole *18
        p1.innerText = `Pole powierzchni pomieszczenia: ${pole}, koszt montażu ${koszt} `
    }

    
}
}