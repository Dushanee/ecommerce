if (typeof window !== 'undefined') {
    
     var deco     = document.getElementById('deco');
     var decoLink = document.getElementById('decoLink');
     
     deco.onclick = function(){
       decoLink.click();
     }

     var venue     = document.getElementById('venue');
     var venueLink = document.getElementById('venueLink');
     
     venue.onclick = function(){
       venueLink.click();
     }
 }