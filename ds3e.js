window.addEventListener("load", function(){
    button();
    setInterval(goGetta, 1000);
  });

  function button(response)
    {
      document.getElementById('grabphpdiv').innerHTML = response
    };

  AjaxGet("api/get.php",button);

  function goGetta (){
    AjaxGet("api/get.php",button);
  }
