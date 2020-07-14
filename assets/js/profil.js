window.onload=function(){
var tab=document.getElementsByClassName('tab');
var tabcontent=document.getElementsByClassName('tabcontent');
tabcontent[0].classList.add("show");
tabcontent[1].classList.add("hiden");
tabcontent[2].classList.add("hiden");
tab[0].onclick = function() {
  tabcontent[2].classList.remove("show");
  tabcontent[1].classList.remove("hiden");
  tabcontent[0].classList.remove("hiden");

  tabcontent[0].classList.add("show");
  tabcontent[1].classList.add("hiden");
  tabcontent[2].classList.add("hiden");
  tabcontent[1].classList.remove("show");
  }
tab[1].onclick = function() {
  tabcontent[1].classList.add("show");
  tabcontent[0].classList.add("hiden");
  tabcontent[2].classList.add("hiden");

  tabcontent[0].classList.remove("show");
  tabcontent[1].classList.remove("hiden");
  tabcontent[2].classList.remove("hiden");
  tabcontent[2].classList.remove("show");

  }
tab[2].onclick = function() {
  tabcontent[2].classList.add("show");
  tabcontent[1].classList.add("hiden");
  tabcontent[0].classList.add("hiden");

  tabcontent[1].classList.remove("show");
  tabcontent[0].classList.remove("hiden");
  tabcontent[2].classList.remove("hiden");
  tabcontent[0].classList.remove("show");
  }
console.log(tab[0]);
}
