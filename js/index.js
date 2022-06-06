// inserindo o modal
var modal = document.getElementById("myModal");
  
// Ao clicar na imagem e insere o modal 
var img = document.getElementById("myImg");
var modaliframe= document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// elemento para fechar o modal
var span = document.getElementsByClassName("close")[0];

//clique no x para sair
span.onclick = function() { 
  modal.style.display = "none";
}