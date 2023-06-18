// Hidden menu


const body = document.querySelector('body')
const hidden = document.querySelector('.hidden')
const burgerMenu = document.querySelector('.nav_burger_menu')
const burgerClose = document.querySelector('.nav_burger_close')

burgerMenu.addEventListener('click', function() {
    burgerMenu.classList.add('hide')
    burgerClose.classList.add('show')
    hidden.classList.add('show')
    body.classList.add('noscroll')
})

burgerClose.addEventListener('click', function() {
    burgerMenu.classList.remove('hide')
    burgerClose.classList.remove('show')
    hidden.classList.remove('show')
    body.classList.remove('noscroll')
})


// Steps circles

const steps = document.querySelector('.steps_wrap')
const stepsCirle = document.querySelectorAll('.steps_circle')

if (steps) {
    window.addEventListener('scroll', function() {
        const viewportOffset = steps.getBoundingClientRect();

        if (this.innerWidth > 992) {
            if (viewportOffset.top > -200 && viewportOffset.top < viewportOffset.height) {
                stepsCirle.forEach((elem, index) => {
                    if (Math.round((viewportOffset.top + 300) / ((viewportOffset.height) / 5)) == 5 - index) {
                        elem.classList.add('active')
                    } else {
                        elem.classList.remove('active')
                    }
                })
            }
        } else {
            if (viewportOffset.top + viewportOffset.height > 0) {
                stepsCirle.forEach((elem, index) => {
                    if (viewportOffset.top < this.innerHeight - ((viewportOffset.height * (index+1)) / 5)) {
                        elem.classList.add('active')
                    } else {
                        elem.classList.remove('active')
                    }
                })
            }
        }
        
    })
}

// Types 
const types = document.querySelectorAll('.types_item')

if (types) {
    types.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            types.forEach(elem => {
                elem.classList.remove('active')
            })
            item.classList.add('active')
        })
    })
}


let buttonL = document.querySelector('.button-l')
let buttonS = document.querySelector('.button-s')

if (buttonL) {
    buttonL.addEventListener('mousemove', e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        buttonS.style.left = (x - 20) * 1.5 + 'px'
        buttonS.style.top = (y - 20) * 1.5 + 'px'
    })
}