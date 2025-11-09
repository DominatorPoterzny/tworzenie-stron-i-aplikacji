let button = document.querySelector('#btn')
    button.addEventListener("click",log)
    let koszt = 0
    function log(){
        // let kurs = document.querySelectorAll('input[checkbox]').value
        // const kurs = document.querySelectorAll('input[type=checkbox]').value
        const react = document.querySelector('#react')
        const java = document.querySelector('#java')
        const rata = document.querySelector('#rata').value
        const city = document.querySelector('#miasto').value
        const p1 = document.querySelector('#p1')
        // let koszt = 0
        // console.log(kurs)
        console.log(rata)
        console.log(city)
            if(react.checked == false){
                koszt = 3000
                console.log(koszt)
            }
            else if(java.checked == false){
                koszt = 5000
                console.log(koszt)
            }
            if(react.checked == true&&java.checked==true){
                koszt = 8000
                console.log(koszt)
            }
        
        p1.innerHTML = `Kurs odbędzie się w ${city}. Koszt całkowity: ${koszt} zł. Płacisz ${rata} rat po ${koszt/rata} zł `
    }