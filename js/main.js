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