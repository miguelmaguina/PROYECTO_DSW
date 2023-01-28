let turno = "X";
var huboGanador = false;
let indicesDeCaminoGanador = [];
var contadorDeTurnos=0;

var cells = document.querySelectorAll("td");

for (var i = 0; i < cells.length; i++) {
    cells[i].addEventListener("click", handleClick);
    cells[i].textContent = "";
}

function handleClick(event) {
    var cell = event.target;
    if (cell.innerText == "" && huboGanador == false) {
        cell.innerText = turno;
        aplicarColor(cell);
        if (revisarPorGanador()) {
            huboGanador = true;
            Swal.fire("El ganador es " + turno);
        } else {
            cambiarTurno();
        }
    }else
        if((cell.innerText == "X" || cell.innerText == "O") && huboGanador == false && contadorDeTurnos>=9){
            contadorDeTurnos=0;
            reiniciarJuego();
        } else
            if(huboGanador==true){
                contadorDeTurnos=0;
                reiniciarJuego();
            }
}

function cambiarTurno() {
    contadorDeTurnos++;
    if (turno == "X") {
        turno = "O";
    } else {
        turno = "X";
    }
    console.log(contadorDeTurnos);
}

function aplicarColor(cell){
    if (turno == "X") {
        cell.classList.remove("ganador");
        cell.classList.remove("o");
        cell.classList.add("x");
    } else {
        cell.classList.remove("ganador");
        cell.classList.remove("x");
        cell.classList.add("o");
    }
}

function revisarPorGanador() {
    var cells = document.querySelectorAll("td");
    indicesDeCaminoGanador = [];
    var posiblesCombinaciones = [ // Arreglo de posibles caminos ganadores
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    for (var i = 0; i < posiblesCombinaciones.length; i++) {
        if (cells[posiblesCombinaciones[i][0]].innerText == turno &&
            cells[posiblesCombinaciones[i][1]].innerText == turno &&
            cells[posiblesCombinaciones[i][2]].innerText == turno) {
            
            //Aplicando estilo dorado para el ganador
            cells[posiblesCombinaciones[i][0]].classList.remove("x");
            cells[posiblesCombinaciones[i][1]].classList.remove("x");
            cells[posiblesCombinaciones[i][2]].classList.remove("x");
            cells[posiblesCombinaciones[i][0]].classList.remove("o");
            cells[posiblesCombinaciones[i][1]].classList.remove("o");
            cells[posiblesCombinaciones[i][2]].classList.remove("o");
            cells[posiblesCombinaciones[i][0]].classList.add("ganador");
            cells[posiblesCombinaciones[i][1]].classList.add("ganador");
            cells[posiblesCombinaciones[i][2]].classList.add("ganador");
            
            return true;
        }
    }
    return false;
}

function aplicarCaminoGanador(){
    
}
function reiniciarJuego() {
    huboGanador = false;
    let cells = document.getElementsByTagName("td");
    for (let i = 0; i < cells.length; i++) {
        cells[i].innerHTML = "";
    }
    turno = "X";
    ganador = null;
}

