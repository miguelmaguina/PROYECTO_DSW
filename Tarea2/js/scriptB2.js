const fulImgBox=document.getElementById("fulImgBox");
fulImgBox=document.getElementById("fulImg");

function openFulImg(reference){
    fulImgBox.style.display="flex";
    fulImg.src=reference;
}

function closeImg(){
    fulImgBox.style.display="none";
}