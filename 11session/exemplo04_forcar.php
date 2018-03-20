<?php

session_id('m78p9di7dpf21u9k85qphvp5o8');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo '<pre>';
var_dump($_SESSION);