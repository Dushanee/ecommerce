if (typeof window !== 'undefined') {

  document.getElementById("footer1").style.marginTop = "534px";

  function sendData(type){
    if(type == 'customer'){
        window.location='http://localhost:80/chandula6/FrontUi/php/fifth.php';
    }else if(type == 'serviceProvider'){
      window.location='http://localhost:80/chandula6/FrontUi/service%20provider/php/register1.php';
    }
  } 
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("navBar").style.top = "537px";
    } else {
      document.getElementById("navBar").style.top = "537px";
    }
  }
}