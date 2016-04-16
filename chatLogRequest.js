window.addEventListener("load", function(){
    button();
    setInterval(goGetta, 1000);
    clear();
  });

  AjaxGet("api/get.php",button);
  AjaxGet("api/get.php",Refresh);


  function button(response)
    {
      document.getElementById('grabphpdiv').innerHTML = response
      var chatDiv = document.getElementById("grabphpdiv");
      chatDiv.scrollTop = chatDiv.scrollHeight;
    };



    function Refresh(response)
      { document.getElementById("Refresh").addEventListener("click", function(){
        document.getElementById('grabphpdiv').innerHTML = response; })
      };

    function goGetta (){
      AjaxGet("api/get.php",button);
    }
