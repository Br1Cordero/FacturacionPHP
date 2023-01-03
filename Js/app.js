date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;


const abrir = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const cerrar = document.getElementById('close');

abrir.addEventListener('click', function(){ 
    modal_container.classList.add('show');
 });

cerrar.addEventListener('click', (e) => {
  modal_container.classList.remove('show');
});