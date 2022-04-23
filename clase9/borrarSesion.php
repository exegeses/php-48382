<?php

    session_start();

    //borrar una variable
    unset($_SESSION['numero']);

    //borrar TODAS las variables de session
    session_unset();

    //borrar la sesión
    session_destroy();
