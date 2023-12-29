const navBar = document.querySelector('.main-navigation')
const menuBtn = document.querySelector('.menu-btn-5')
const sideBar = document.querySelector('.sidebar')
const body = document.querySelector('body')

let lastScroll = 0

function handleScroll() {
    let currentScroll = window.scrollY
    if (currentScroll < lastScroll && lastScroll !== 0) {
        console.log('scrolling up')
        navBar.classList.add('scrollup')
        navBar.classList.remove('scrolldown')
        navBar.classList.remove('top')
    }
    if (currentScroll > lastScroll) {
        console.log("scrolling down")
        navBar.classList.add('scrolldown')
        navBar.classList.remove('scrollup')
        navBar.classList.remove('top')
    }
    if (currentScroll <= 0) {
        console.log('at top')
        navBar.classList.add('top')
        navBar.classList.remove('scrollup')
        navBar.classList.remove('scrolldown')
    }
    lastScroll = currentScroll
} 

function toggleActive() {
    menuBtn.classList.toggle('active')
    sideBar.classList.toggle('sidebaractive')
    body.classList.toggle('lock')
    
}

window.addEventListener('scroll', handleScroll)
menuBtn.addEventListener('click', toggleActive)

