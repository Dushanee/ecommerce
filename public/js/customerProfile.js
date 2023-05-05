if (typeof window !== 'undefined') {
      
    function showProfileDetails(){
        window.location='http://localhost:80/chandula6/FrontUi/php/customerProfile.php';
    }
    
    //document.getElementById("footer1").style.marginTop = "800px";

    var camera = document.getElementById('camera');
    var input = document.getElementById('input');
    var imageData = document.getElementById('imageData');

    camera.onclick = function(){
        input.click();
    }
    input.onchange = function(){
        imageData.click();
    }
}