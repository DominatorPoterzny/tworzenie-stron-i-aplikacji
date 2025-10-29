// const { createElement } = require("react")

let form = document.querySelector('form')
for (let i = 1; i < 101 ;i++) {
    let input = document.createElement('input')
    form.appendChild(input)
    input.style.margin = '10px'
    input.style.boxShadow = '5px 5px 5px lightblue'
    input.id = `e_${i}`
    input.name = `input ${i}`
    input.placeholder = `Element numer ${i}`
    if(i%5==0){
        // let br = document.createElement('br')
        // input.parentNode.insertBefore(br,input.nextSibling)
        form.innerHTML += '<br>'
    }

    
}