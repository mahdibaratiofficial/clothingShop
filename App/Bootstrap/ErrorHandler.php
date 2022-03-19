<?php

error_reporting(E_ALL);
set_error_handler("Core\Error::ErrorHandler");
set_exception_handler("Core\Error::ErrorExceptionHandler");

?>