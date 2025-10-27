

let odp = document.querySelectorAll('.odp1')
let ukr = ['lag','aimbot','loot','noob','fanboy','hitbox','camping','respawn']
let pod = document.querySelectorAll('.pod')
let pod1 = document.querySelectorAll('.pod1')
let span = document.querySelectorAll('.ukryte')
console.log(ukr)
console.log(odp)
console.log(pod)

pod.forEach((element, i)=>{
    element.addEventListener('click', loga)
    function loga(b){ 
        element.innerHTML = '&blk34;'
        pod1[i].innerHTML = `(${ukr[i].length})`
        pod1[i].innerHTML = 
    }

})






odp.forEach((element, i) => {
	element.addEventListener('click', log)
    function log(a){
        const odpo = prompt(`Podaj odpowiedz na pytanie ${i+1}:`)
        if(odpo === ukr[i]){
            alert(`Twoja odpowiedz jest poprawna`)
            odp[i].style.display = "none"
            span[i].style.display = 'inline'
            span[i].style.fontWeight = 'bold'
        }else{
            alert(`Twoja odpowiedz jest zła`)   
        }
    }
})
