if (typeof window !== 'undefined') { 

    //document.getElementById('footer1').style.marginTop = "220px";
    //document.getElementById('footer1').style.position = "absolute";
    
    //document.getElementById('location').style.marginTop = "-200px";


    function marginTop() {
        
        var height = document.getElementById('sideMenuBar').getBoundingClientRect().bottom;
        var op1 = document.getElementById('op1').getBoundingClientRect().bottom;
        var op2 = document.getElementById('op2').getBoundingClientRect().bottom;
        var op3 = document.getElementById('op3').getBoundingClientRect().bottom;
        var op4 = document.getElementById('op4').getBoundingClientRect().bottom;

        var profilepic = document.getElementById('profilepic').getBoundingClientRect().bottom;
       
        if(height>op1){
            document.getElementById('op1').style.visibility = 'visible';
        }else if(height<op1){
            document.getElementById('op1').style.visibility = 'hidden';
        }

        if(height>op2){
            document.getElementById('op2').style.visibility = 'visible';
        }else if(height<op2){
            document.getElementById('op2').style.visibility = 'hidden';
        }

        if(height>op3){
            document.getElementById('op3').style.visibility = 'visible';
        }else if(height<op3){
            document.getElementById('op3').style.visibility = 'hidden';
        }

        if(height>op4){
            document.getElementById('op4').style.visibility = 'visible';
        }else if(height<op4){
            document.getElementById('op4').style.visibility = 'hidden';
        }

        if(height>profilepic){
            document.getElementById('profilepic').style.visibility = 'visible';
        }else if(height<profilepic){
            document.getElementById('profilepic').style.visibility = 'hidden';
        }

        setTimeout(marginTop, 30);
    }
    marginTop();

    function dropdown(){

        
        var height = document.getElementById('sideMenuBar').offsetHeight;

        if(height == 0){
            document.getElementById('sideMenuBar').style.height = "79vh";
            document.getElementById('userMenu').style.rotate    = "-90deg";
        }else{
            document.getElementById('sideMenuBar').style.height = "0vh";
            document.getElementById('userMenu').style.rotate    = "0deg";
        }
        
    }
    function showProfileDetails(){
        window.location='http://localhost:80/chandula6/FrontUi/php/customerProfile.php';
    }


    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       document.getElementById("navBar").style.top = "26px";
      } else {
       document.getElementById("navBar").style.top = "26px";
      }
    }



    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("add_to_cart");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


 var halls  = document.getElementById("halls");
 var option_id = halls.value;


var sp_id  = parseInt(document.getElementById("sp_id").textContent);
var pack_id = parseInt(document.getElementById("pack_id").textContent);


 
halls.onchange = function() {

  var halls  = document.getElementById("halls");
  var option_id = halls.value;

  window.location.href = "http://localhost:80/EventsLab/src/php/customer/createEvent/food_provider_shopPage.php?option_id="+option_id+"&"+"sp_id="+sp_id+"&"+"pack_id="+pack_id;

}




}


