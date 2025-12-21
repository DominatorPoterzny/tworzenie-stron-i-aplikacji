
// pierwszy sposób

let pragraf1 = document.querySelector('#p1')
let pragraf2 = document.querySelector('#p2')
let pragraf3 = document.querySelector('#p3')

let cytat1 = document.querySelector('#cytat1')
let cytat2 = document.querySelector('#cytat2')
let cytat3 = document.querySelector('#cytat3')

function zmiana1(){
    cytat1.style.display = 'none'
    cytat2.style.display = 'block'
}
function zmiana2(){
    cytat2.style.display = 'none'
    cytat3.style.display = 'block'
}
function zmiana3(){
    cytat3.style.display = 'none'
    cytat1.style.display = 'block'
}


// drugi sposób jednak coś nie działa XD

// let cytaty = document.querySelectorAll('blockquote')
// console.log(cytaty)
// cytaty.forEach((element,i=0) => {
//    element.addEventListener('click',function(){
//     i++
//     if(i==1){
//         console.log(i)
//         cytaty[0].style.display = 'none'
//         cytaty[1].style.display = 'block'
//         cytaty[2].style.display = 'block'
//     }
//     if(i==2){
//         console.log(i)
//         cytaty[1].style.display = 'none'
//         cytaty[0].style.display = 'block'
//         cytaty[2].style.display = 'block'
//     }
//     if(i==3){
//         console.log(i)
//         cytaty[2].style.display = 'none'
//         cytaty[1].style.display = 'block'
//         cytaty[0].style.display = 'block'
//     }
//    })

// });