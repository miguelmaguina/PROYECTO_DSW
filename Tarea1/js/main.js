const typed = new Typed('.typed', {
	strings: [
		'<em class="mascota">Diana Bardon 20200027</em>',
		'<em class="mascota">Ivan Saenz 20200095</em>',
		'<em class="mascota">Luis Mayta 20200007</em>',
		'<em class="mascota">Miguel Maguiña 20200050</em>',
		'<em class="mascota">Nicolas Anicama 20200060</em>',
		'<em class="mascota">Renzo Tacuri 20200049</em>',
		'<em class="mascota">Yan Huaman 20200044</em>'
	],
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});