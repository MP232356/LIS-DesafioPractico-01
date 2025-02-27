const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect'); 

const select2 = document.querySelector('#select2');
const opciones2 = document.querySelector('#opciones2');
const contenidoSelect2 = document.querySelector('#select2  .contenido-select');
const hiddenInput2 = document.querySelector('#inputSelect2'); 

document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		//select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
        
	});
});

document.querySelectorAll('#opciones2 > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e2) => {
		e2.preventDefault();
		contenidoSelect2.innerHTML = e2.currentTarget.innerHTML;
		select2.classList.toggle('active');
		opciones2.classList.toggle('active');
		hiddenInput2.value = e2.currentTarget.querySelector('.titulo').innerText;
        
	});
}); 

select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});
select2.addEventListener('click', () => {
	select2.classList.toggle('active');
	opciones2.classList.toggle('active');
});
