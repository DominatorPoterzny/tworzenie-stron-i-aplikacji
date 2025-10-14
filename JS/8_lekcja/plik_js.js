const guzik = document.querySelector('#btn')

guzik.addEventListener('click', () => {
    const sufit = prompt(`Wpisz kolor sufitu:`)
    if(sufit){
        alert(`Twoje niebo ma kolor ${sufit}`)
    }else if(dane === null){
        alert(`Anlowałeś akcje, a okno promt zwróciło ${sufit}`)
    }
})