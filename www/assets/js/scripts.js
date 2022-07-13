// Base ajax function
const xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText);
   }
};

const btn = document.querySelectorAll("i");

btn.forEach(function (btn) {
   
   // if (btn.classList.contains('fa-minus-square')){
      btn.addEventListener("click", function () {
         // this.parentElement.parentElement.remove()
         
         // Ajax request
         xmlhttp.open("GET", "../teste.php", true);
         xmlhttp.send();
      });
   // }
});
