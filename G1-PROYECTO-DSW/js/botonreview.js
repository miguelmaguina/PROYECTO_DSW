function disable(x)
{
 if(x.disabled = true){
    var uno = document.getElementById('botonreview');
    if (uno.innerText == 'Solicitando permiso para review') 
            uno.innerText = 'Dejar Review';
    else uno.innerText = 'Solicitando permiso para review'; 
 }else{
    x.activated = false;
 }

}

