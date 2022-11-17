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

function generate_token(length){
  var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
  var b = [];  
  var inputField = document.getElementById("tkntxt");
  for (var i=0; i<length; i++) {
      var j = (Math.random() * (a.length-1)).toFixed(0);
      b[i] = a[j];
  }
  var token = b.join("");
  inputField.value = token;
  // $("#tkntxt").html(token);

}

// function 
// generate_token(32); 