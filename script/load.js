const chargement = document.querySelector('.chargement');
const sec = document.getElementById("chargement");

function attendre(){
    sec.style.display = 'none'
}
window.addEventListener('load', () => {

    chargement.classList.add('fondu-out');
    setTimeout(attendre,500);
})

