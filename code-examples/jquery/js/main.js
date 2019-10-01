const mensaje =$('p').html();

alert(mensaje);

$('p').html("<strong> CHAU </strong>");


/* 
$('button').click( () => {
    const valor = $('input').val();

    alert(valor);
}); */

/*
Alternativa sin funcion anonima
function saludar() {
    const valor = $('input').val();

    alert(valor);
}

$('button').click(saludar);
*/

$('#aparecer').click( () => {
    $('.elemento').show();
} );

$('#desaparecer').click( () => {
    $('.elemento').hide();
} );
