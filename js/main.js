const iconMenu = document.querySelector('.icon-responsive')
const menu = document.querySelector('.menu')

iconMenu.addEventListener("click", openmenu);

function openmenu(e){
    e.preventDefault()
    menu.classList.toggle('active');
}