const zeminRenginiDegistir = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#5b5b5b";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#5b5b5b";
  };
  const zD = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#A5879E";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#A5879E";
  };

const zF = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#f4cccc";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#f4cccc";
  };
  const zG = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#9fc5e8";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#9fc5e8";
  };
  const zC = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#e7e89f";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#e7e89f";
  };
  const zB = () => {
    const tbDOM = document.getElementById("tb");
    tbDOM.style.backgroundColor ="#f44336";
    const menuDOM = document.getElementById("menu");
    menuDOM.style.backgroundColor ="#f44336";
  };
  var mpopup  = document.getElementById('pencereKutu');
var mpLink  = document.getElementById("pencereLink");  
var close   = document.getElementsByClassName("kapat")[0];
mpLink.onclick = function() {
mpopup.style.display = "block";
}
close.onclick = function() {
mpopup.style.display = "none";
}
window.onclick = function(event) {
if (event.target == mpopup) {
  mpopup.style.display = "none";
}
} 