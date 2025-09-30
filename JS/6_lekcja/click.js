const klik = document.querySelector('body');
const p = document.querySelector(".first")
klik.addEventListener("keydown", lagkey);
function lagkey(a){
    
    p.innerHTML = a.key
    console.log("Klawisz " + a.code)
    // p.innerHTML = e.code

}
// function logkey(a) to "a" to jest tylko nazwa funkcji