<?php
if (!session_id()) {
  session_start();
}
require_once '../app/init.php';
// instance dari class App
$App = new App;
