<!-- ---------------------------------------------------------------------- -->
<script>
    
    window.addEventListener("beforeunload", function (e) {
        var confirmationMessage = "\o/";

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage;                            //Webkit, Safari, Chrome
    });
    
</script>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<body onbeforeunload="ConfirmClose()" onunload="HandleOnClose()">

    <script>
        var myclose = false;

        function ConfirmClose()
        {
            if (event.clientY < 0)
            {
                event.returnValue = 'You have closed the browser. Do you want to logout from your application?';
                setTimeout('myclose=false',10);
                myclose=true;
            }
        }

        function HandleOnClose()
        {
            if (myclose==true) 
            {
                //the url of your logout page which invalidate session on logout 
                location.replace('/contextpath/j_spring_security_logout') ;
            }   
        }
    </script>
    
</body>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<script>
    window.addEventListener("beforeunload", function (e) {        
      $.ajax({
          type: "POST",
          url: startTimerUrl,
          async: false           
      });
      return;
    });
</script>
<!-- ---------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------- -->
<script>
    $(window).unload( function () { alert("Bye now!"); } );
</script>
<!-- ---------------------------------------------------------------------- -->