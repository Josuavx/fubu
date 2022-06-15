<?php

session_start();

    
if(isset($_SESSION["usuario"]))
{
    if(time()-$_SESSION["hora_login"] > 600)
    {
        
        session_unset();
        session_destroy();
        header('Location: http://'. $_SERVER['HTTP_HOST'].'/FUBU/index.php', true, 303);
        echo '<script type="text/javascript"> alert("Sessao expirada. Por favor se identifique novamente."); </script>';
        
    }
}
else
{
   // header('Location: http://'. $_SERVER['HTTP_HOST'].'/workspace/FUBU/index.php', true, 303);
}


?>