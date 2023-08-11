document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('.navbar')

    function addBg() {
        if(window.scrollY >= 300) {
            nav.classList.add('shadow-bg')       
        } else {
            nav.classList.remove('shadow-bg')
        }
        console.log(window.scrollY);
    }
    window.addEventListener('scroll', addBg)
}) 

