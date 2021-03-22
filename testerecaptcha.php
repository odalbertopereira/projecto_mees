<!DOCTYPE html>
<html> 
    <head> 
        <title> demo reCAPTCHA: renderização explícita após um retorno de chamada de onload </title> 
       <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head> 
    <body> 
        <form action = "?" method = "POST" > 
            <div class="g-recaptcha" data-sitekey="6LdyX7kUAAAAAP6ruVVUEwbeZdOcnScWsBkP9zNY"></div> 
            <br> 
            <input type = "submit" value = "Submit" > 
        </form> 
        <script src = "https://www.google.com/recaptcha/api.js? onload = onloadCallback & render = explícito " adiamento assíncrono >
        </script> 
    </body> 
</html>

         
    
  