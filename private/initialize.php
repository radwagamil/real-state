<?php

require_once("database_functions.php");
require_once("models/admin.class.php");
require_once("models/service.class.php");
require_once("models/propriety.class.php");
require_once("models/superAdmin.class.php");
require_once("models/address.class.php");
require_once("models/type.class.php");

  $db = db_connect();


  Propriety::set_database($db);
  Service::set_database($db);
  Admin::set_database($db);
  Address::set_database($db);
  Type::set_database($db);
  SuperAdmin::set_database($db);

 ?>
