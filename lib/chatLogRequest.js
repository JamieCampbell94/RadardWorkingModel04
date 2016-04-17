AjaxGet("api/get.php",button);
AjaxGet("api/get.php",Refresh);

    /**sets up event listener on the windows load it executes ajaxget request
    every 1 second**/
    window.addEventListener("load", function(){
        setInterval(goGetta, 1000);
        clear();
      });

    //function used to get data from ajaxget and put it into "grabphpdiv"
    function button(response)
      {
        document.getElementById('grabphpdiv').innerHTML = response
        var chatDiv = document.getElementById("grabphpdiv");
        chatDiv.scrollTop = chatDiv.scrollHeight;
      };

    //function used to refresh chat log
    function Refresh(response)
      { document.getElementById("Refresh").addEventListener("click", function(){
        document.getElementById('grabphpdiv').innerHTML = response; })
      };

    //Function used to execute ajaxGet
    function goGetta (){
      AjaxGet("api/get.php",button);
    }
