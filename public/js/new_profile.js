if (typeof window !== 'undefined') {

   var profile_pic    = document.getElementById('profile_pic');
   var update_profile_photo = document.getElementById('update_profile_photo');
   var fileToUpload   = document.getElementById('fileToUpload');

   profile_pic.onclick = function() {
     fileToUpload.click();
   }

   fileToUpload.onchange = function() {
    update_profile_photo.click();
   }


  var cust_info = document.getElementById('cust_info');
  var update_profile_details = document.getElementById('update_profile_details');
  //console.log(cust_name);

  cust_info.onchange = function() {
    update_profile_details.click();
  }



}