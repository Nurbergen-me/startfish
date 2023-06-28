// Hidden menu

const body = document.querySelector('body')
const hidden = document.querySelector('.hidden')
const burgerMenu = document.querySelector('.nav_burger_menu')
const burgerClose = document.querySelector('#burger_close')

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

// Hidden project form
const project = document.querySelector('#offer-1')
const project2 = document.querySelector('#offer-2')
const webPages = document.querySelector('#web-pages')
const webPagesBottom = document.querySelector('#web-pages-bottom')
const navProjectBtn = document.querySelector('.nav_btn')
const hiddenProjectBtn = document.querySelector('.hidden_btn')
const projectClose = document.querySelector('#project-close')
const projectClose2 = document.querySelector('#project-close2')

if (project) {
    navProjectBtn.addEventListener('click', function() {
        project.classList.add('show')
        body.classList.add('noscroll')
    })
    hiddenProjectBtn.addEventListener('click', function() {
        project.classList.add('show')
        body.classList.add('noscroll')
    })
    projectClose.addEventListener('click', function() {
        project.classList.remove('show')
        if (!hidden.classList.contains('show')) {
            body.classList.remove('noscroll')
        }
    })
}

if (project2) {
    webPages.addEventListener('click', function() {
        project2.classList.add('show')
        body.classList.add('noscroll')
    })
    webPagesBottom.addEventListener('click', function() {
        project2.classList.add('show')
        body.classList.add('noscroll')
    })
    projectClose2.addEventListener('click', function() {
        project2.classList.remove('show')
        if (!hidden.classList.contains('show')) {
            body.classList.remove('noscroll')
        }
    })
}

// Project services choose


const projectServices = document.querySelectorAll('.project_services_item')

if (projectServices) {
    projectServices.forEach(item => {
        item.addEventListener('click', (e) => {
            projectServices.forEach(elem => {
                elem.classList.remove('active')
            })
            item.classList.add('active')
        })
    })
}

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


// Select category

let services = [
    {
        id: 1,
        name: 'Отрасль 1',
        selected: true
    },
    {
        id: 2,
        name: 'Отрасль 2',
        selected: false
    },
    {
        id: 3,
        name: 'Отрасль 3',
        selected: false
    },
];
let branches = [
    {
        id: 1,
        name: 'транспорт и логистика',
        selected: false
    },
    {
        id: 2,
        name: 'гастрономия',
        selected: false
    },
    {
        id: 3,
        name: 'event и развлечения',
        selected: false
    },
    {
        id: 4,
        name: 'образование',
        selected: false
    },
    {
        id: 5,
        name: 'Красота и здоровье',
        selected: false
    },
    {
        id: 6,
        name: 'Строительство и недвижимость',
        selected: false
    },
    {
        id: 7,
        name: 'IT',
        selected: false
    },
    {
        id: 8,
        name: 'финансы и аналитика',
        selected: false
    },
    {
        id: 9,
        name: 'другое',
        selected: false
    }
]

const categoriesWrap = document.querySelector('.templates_categories')

// setCategories(branches)

const sortBtns = document.querySelectorAll('.sort-btn')
const clearBtn = document.querySelector('.clear-btn')

if (sortBtns) {
    sortBtns.forEach((btn, index) => {

        btn.addEventListener('click',(item) => {

            if (btn.classList.contains('active')) {
                btn.classList.remove('active')
                setCategories([])
            } else {
    
                if (btn.dataset.name === 'branches') {
                    setCategories(branches)
                    btn.classList.add('active')
                } else if (btn.dataset.name === 'services') {
                    setCategories(services)
                    btn.classList.add('active')
                } else if (btn.dataset.name === 'clear') {
                    btn.classList.add('hidden')
                    branches.forEach((category) => {
                        category.selected = false
                    })
                    services.forEach((category) => {
                        category.selected = false
                    })
                    sortBtns.forEach( x => {
                        x.classList.remove('active')
                    })
                    setCategories([])
                }
            }
        })
    })
}

function setCategories(array) {
    if (categoriesWrap) {
        categoriesWrap.innerHTML = ''
        array.forEach(item => {
            let div = document.createElement('div')
            const divText = document.createTextNode(item.name)
            div.classList.add('templates_category')
            if (item.selected) {
                div.classList.add('active')
            }
            div.appendChild(divText)
            div.dataset.id = item.id
            
            div.addEventListener('click', (e) => {
                div.classList.toggle('active')
                item.selected = !item.selected

                if (array.filter(x => x.selected).length > 0) {
                    clearBtn.classList.remove('hidden')
                } else {
                    clearBtn.classList.add('hidden')
                }
            })
            categoriesWrap.appendChild(div)
        })
    }
}