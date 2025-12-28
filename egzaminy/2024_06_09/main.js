let aktywnezdjecie = document.querySelector('#Aktywnezdjecie')
let licznik = 1
function doprzodu(){
    console.log(licznik)
    console.log('dupaprzód')
    if(licznik !=8){
        licznik ++
        aktywnezdjecie.src = `${licznik}.jpg`
        
    }else{
        aktywnezdjecie.src = `1.jpg`
        licznik = 1
    }
}
function dotylu(){
    console.log(licznik)
    console.log('dupatył')
   if(licznik != 1){
    licznik --
    aktywnezdjecie.src = `${licznik}.jpg`
   
   }else{
    aktywnezdjecie.src = '7.jpg'
    licznik = 7
   }
}
