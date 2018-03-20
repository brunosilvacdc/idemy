<?php

require_once("../11session/config.php");

echo session_save_path();

echo '<br>';
echo '<br>';

var_dump(session_status());

echo '<br>';

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo '<br>';
		echo " as sessões estiverem desabilitadas";
		echo '<br>';
		break;
	
	case PHP_SESSION_NONE:
		echo '<br>';
		echo " as sessões estiverem habilitadas mais não iniciadas";
		echo '<br>';
		break;

	case PHP_SESSION_ACTIVE:
		echo '<br>';
		echo "<h1> As sessões estiverem habilitades e uma existi. </h1>";
		echo '<br>';
		break;
}