
console.log('dziddddała')

let text = document.querySelector(".hero-text-box h1")



const slides = [...document.querySelectorAll('.hero-black > img')]
let current = document.querySelector('img.current')
let index = 0;
console.log(slides)


setInterval(() => {

    if (index < slides.length -1) {
      
        slides[index].classList.remove('current')
        index++
    
        slides[index].classList.add('current')

    } else {
        slides[index].classList.remove('current')
        index = 0
        slides[index].classList.add('current')
    }
    
}, 3000)
