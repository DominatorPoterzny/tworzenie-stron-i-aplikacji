document.querySelector('header').style.backgroundColor='yellow';


const tekst = document.querySelector('header h1')
console.log(tekst);


document.querySelector('header h1').style.fontFamily='Arial Black';
document.querySelector('header h1').innerHTML="Preambuła";


const teskst2 = document.querySelectorAll('section')
teskst2.forEach(x => {
    x.style.border = 'brown 2px solid'
});




// document.getElementsByTagName('section').style.borderWidth = '2px';
// document.getElementsByTagName('section').style.borderStyle = 'solid';
// document.getElementsByTagName('section').style.borderColor = 'brown';
// document.getElementsByTagName('section').style.borderTop = 'brown 2px solid';
// for (let i = 0; i<4; i++) {
//     document.getElementsByTagName('section').style.border = 'brown 2px solid'
    
// }


const tekst3 = document.querySelector('section.main_column h1');
console.log(tekst3);
document.querySelector('section.main_column h1').innerHTML = "Specjalność szefa";


const tak = document.querySelector(".main_column");
// console.log(tak);
const nie = document.createElement("p");
nie.innerHTML = "Kebab na frytkach";
tak.appendChild(nie);
// console.log(nie);

const foot = document.querySelector('footer');
const div = document.createElement('div');
div.style.backgroundColor = 'pink';
foot.appendChild(div);

const div2 = document.querySelector( 'footer div');
const p = document.createElement('p');
p.style.textAlign = 'center';
p.innerHTML = '&copy;';
div2.appendChild(p);

// zad 7

// const usun = document.querySelector()
const h1 = document.getElementsByTagName('h1');
h1[3].remove();


const head = document.querySelector('header');
const p2 = document.createElement('p');
const p3 = document.createElement('p');
p2.innerHTML = '<i>Pochylony tekst</i>';
p3.innerText = '<i>Pochylony tekst</i>';

head.appendChild(p2);
head.appendChild(p3);


const sec = document.createElement('section');
const body = document.querySelector('body');
sec.style.border = '2px blue dotted';
sec.style.padding = '10px 20px';
sec.innerHTML = 'Zderzak';
body.appendChild(sec);