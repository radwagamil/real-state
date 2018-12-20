<?php

require_once("database_functions.php");
require_once("models/admin.class.php");
require_once("models/service.class.php");
require_once("models/propriety.class.php");
require_once("models/superAdmin.class.php");

  $db = db_connect();


  Propriety::set_database($db);
  Service::set_database($db);
  Admin::set_database($db);

 ?>
