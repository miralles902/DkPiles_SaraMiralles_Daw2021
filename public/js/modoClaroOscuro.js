const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click',() =>{
  document.body.classList.toggle('dark');
  btnSwitch.classList.toggle('active');

  //guardar en localStorage
  if(document.body.classList.contains('dark')){
    //si contiene dark
    localStorage.setItem('modoOscuro','true'); //seteamos el modo oscuro a true

  } else{
    localStorage.setItem('modoOscuro','false'); //seteamos el modo oscuro a false
  }
});

// si el modo oscuro es true añadimos  dark y active
if(localStorage.getItem('modoOscuro') === 'true'){
  document.body.classList.add('dark');
  btnSwitch.classList.add('active');
} else{
  // si el modo oscuro es false eliminamos  dark y active
  document.body.classList.remove('dark');
  btnSwitch.classList.remove('active');
}