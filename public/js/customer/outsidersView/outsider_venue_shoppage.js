if (typeof window !== 'undefined') { 


  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     document.getElementById("navBar").style.top = "0px";
    } else {
     document.getElementById("navBar").style.top = "160px";
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

 window.location.href = "http://localhost:80/EventsLab/src/php/customer/outsidersView/outsider_venue_shoppage.php?option_id="+option_id+"&"+"sp_id="+sp_id+"&"+"pack_id="+pack_id;

}




}


