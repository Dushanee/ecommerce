if (typeof window !== 'undefined') {

    document.getElementById("footer1").style.marginTop = "554px";
  
    function sendData(type){
      if(type == 'customer'){
          window.location='http://localhost:80/chandula6/FrontUi/php/customerLogin.php';
      }else if(type == 'serviceProvider'){
          window.location='http://localhost:80/chandula6/FrontUi/service%20provider/php/login.php';
      }
    } 
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("navBar").style.top = "555px";
      } else {
        document.getElementById("navBar").style.top = "555px";
      }
    }
  }