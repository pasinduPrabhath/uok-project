var prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar").style.top = "0";
        } else {
          document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
};
      
function showPopUp() {
  var x = document.getElementById("popUps");
  x.style.display = 'block';
}

function hidePopUp() {
  var x = document.getElementById("popUps");
  x.style.display = 'none';
}

function showPaidPopUp() {
  var x = document.getElementById("paidpopUps");
  x.style.display = 'block';
}

function hidePaidPopUp() {
  var x = document.getElementById("paidpopUps");
  x.style.display = 'none';
}