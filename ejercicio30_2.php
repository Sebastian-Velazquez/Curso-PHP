<?php //Para destruir la session
    session_start();
    session_destroy();

    echo "Se destruyo la session";
?>