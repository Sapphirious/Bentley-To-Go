    <?php
    session_start();
    if(session_destroy()) // Destroying All Sessions
    { 
      header("Location: ../HTML/home.html"); // Redirecting To Home Page 
    }
    ?>
