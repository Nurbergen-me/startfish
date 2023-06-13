const steps = document.querySelector('.steps_wrap')
const stepsCirle = document.querySelectorAll('.steps_circle')

if (steps) {
    window.addEventListener('scroll', function() {
        const viewportOffset = steps.getBoundingClientRect();
        
        if (viewportOffset.top > -200 && viewportOffset.top < viewportOffset.height) {
            stepsCirle.forEach((elem, index) => {
                if (Math.round((viewportOffset.top + 300) / ((viewportOffset.height) / 5)) == 5 - index) {
                    elem.classList.add('active')
                } else {
                    elem.classList.remove('active')
                }
            })
        }
    })
}
