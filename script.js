//Forgot password "too bad" message
function tooBad() {
  document.getElementById("tooBad").innerHTML = "Wow. That sucks.";
}

//Scroll to top button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("top-button").style.display = "block";
  } else {
      document.getElementById("top-button").style.display = "none"
  }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
} 

//Mobile dropdown navbar
function drop() {
  document.getElementById("dropdown-content").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("dropdown-content");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}