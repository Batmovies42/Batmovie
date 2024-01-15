let slideIndex = 1;
let slideTimeout;

const showSlides = () => {
 clearTimeout(slideTimeout);
 document.querySelectorAll('.slide').forEach(slide => {
    slide.style.display = 'none';
 });
 document.querySelector('.slide' + slideIndex).style.display = 'block';
 slideTimeout = setTimeout(showNextSlide, 7000);
};

const showNextSlide = () => {
 if (slideIndex < 10) {
    slideIndex++;
 } else {
    slideIndex = 1;
 }
 showSlides();
};

const showPrevSlide = () => {
 if (slideIndex > 1) {
    slideIndex--;
 } else {
    slideIndex = 10;
 }
 showSlides();
};

document.querySelector('.arrow-left').addEventListener('click', showPrevSlide);
document.querySelector('.arrow-right').addEventListener('click', showNextSlide);

showSlides();



document.querySelector('.boton-filtro').addEventListener('click', function() {
    filtrarDivs();
   });
   
   document.querySelectorAll('.boton-clase').forEach(function(boton) {
    boton.addEventListener('click', function() {
       const clase = this.getAttribute('data-clase');
       filtrarDivs(clase);
    });
   });
   
   function filtrarDivs(clase) {
    const divs = document.querySelectorAll('.contenedor > div');
   
    for (let i = 0; i < divs.length; i++) {
       if (!clase || divs[i].classList.contains(clase)) {
         divs[i].style.display = 'block';
       } else {
         divs[i].style.display = 'none';
       }
    }
   }

   function filtrarDivs(clase) {
    const divs = document.querySelectorAll('.contenedor > div');
    const botones = document.querySelectorAll('.boton-clase');
   
    for (let i = 0; i < divs.length; i++) {
       if (!clase || divs[i].classList.contains(clase)) {
         divs[i].style.display = 'block';
       } else {
         divs[i].style.display = 'none';
       }
    }
   
    for (let i = 0; i < botones.length; i++) {
       if (botones[i].getAttribute('data-clase') === clase) {
         botones[i].classList.add('borde-rojo');
       } else {
         botones[i].classList.remove('borde-rojo');
       }
    }
   }


   function buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    // recorriendo elementos a filtrar mediante los li
    for (i = 0; i < li.length; i++){
       a = li [i].getElementsByTagName("a")[0];
       if (!a) {
           console.error('No se encuentra el elemento <a> dentro del elemento <li>');
           continue;
       }
       textvalue = a.textContent || a.innerText;
       if(textvalue.toUpperCase().indexOf(filter) > -1){
         li[i].style.display = "";
       }else{
         li[i].style.display = "none";
       }
    }
}
