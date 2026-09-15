let hambuergerMenu = document.getElementById('hamburgerMenu')
let hamMenuBtn = document.getElementById('hamMenuBtn')
function openMenu(){
    hamburgerMenu.classList.remove('invisible')
    hambuergerMenu.classList.remove('opacity-0')
    hambuergerMenu.querySelector('div').classList.remove('translate-x-full')
    hambuergerMenu.querySelector('div').classList.remove('delay-100')
}
document.addEventListener('click', (e)=>{
    if(!hambuergerMenu.querySelector('div').contains(e.target) && !hamMenuBtn.contains(e.target)){
        hamburgerMenu.classList.add('invisible')
        hambuergerMenu.classList.add('opacity-0')
        hambuergerMenu.querySelector('div').classList.add('translate-x-full')
        hambuergerMenu.querySelector('div').classList.add('delay-100')
    }
})