let field = document.querySelector('fieldset')

for (let i = 0; i < 100; i=i+4) {
    let p1 = document.createElement('p')
    p1.innerHTML = `${i} `
    field.appendChild(p1)
    
}