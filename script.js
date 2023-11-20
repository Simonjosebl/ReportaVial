// Código JavaScript para capturar el valor de la calificación seleccionada
const stars = document.querySelectorAll('.rating input');
let ratingValue;

stars.forEach(star => {
    star.addEventListener('click', function() {
        ratingValue = this.value;
        console.log(`Calificación: ${ratingValue}`);
    });
});
