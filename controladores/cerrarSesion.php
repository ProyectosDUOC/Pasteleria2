<?php

session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: www.pasteleria.cl');

?>