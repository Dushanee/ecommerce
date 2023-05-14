var clickedID;
var numbers;

document.addEventListener('click', function(e) {
    clickedID = e.target.id;
    numbers = clickedID.match(/\d+/g);
    //console.log(numbers[0]);
    
    var iVal = numbers[0];

    var sendmsgId = "sendmsg" + iVal;
    //console.log(sendmsgId);


    var submit = document.getElementById(sendmsgId);

    if (numbers != "") {

      var senderIDLbl = "senderID" + iVal;
      var receiverIDLbl  = "receiverID" + iVal;

      var senderID = document.getElementById(senderIDLbl).value;
      var recevierID = document.getElementById(receiverIDLbl).value;



        var xhr = new XMLHttpRequest();
        xhr.open("GET", "serviceProviderLiveChat/check2.php?data2="+senderID+"&"+"data3="+recevierID, false);
        xhr.onreadystatechange = function() {
          if(xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
          }
        }
        xhr.send();

       

        submit.click();
    }
}, false);

var Ival = document.getElementById("ival").innerHTML - 1;
//console.log(Ival); 

 while(Ival>=0){

    var unreadMsgCountID = "unreadMsgCount" + Ival;

    var unreadMsgCount = document.getElementById(unreadMsgCountID).innerHTML;
    //console.log(unreadMsgCount);

    if(unreadMsgCount == 0){

        var unreadMsgCountContainer = "unreadMsg" + Ival;

        document.getElementById(unreadMsgCountContainer).style.display = "none";
    }

    Ival--;
 }