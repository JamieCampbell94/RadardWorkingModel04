window.addEventListener("load", function(){
    button();
    setInterval(goGetta, 1000);
  });

  function button(response)
    {
      document.getElementById('grabphpdiv').innerHTML = response
      var chatDiv = document.getElementById("grabphpdiv");
      chatDiv.scrollTop = chatDiv.scrollHeight;
    };

    AjaxGet("api/get.php",button);

  function goGetta (){
    AjaxGet("api/get.php",button);
  }
