<?php
   // require 'vendor/autoload.php';

   include_once('utils/functions.php');
   include_once('utils/autoloader.php');
   session_start();

   $descriptions = [];
   $descriptions['home'] = "Printable seating cards.";
   $descriptions['about'] = "About the page";
   $descriptions['style'] = "About the page";
   $descriptions['templates'] = "About the page";
   $descriptions['help'] = "About the page";

   if (! isset($_GET['view']) || $_GET['view'] == null) {
      $view = 'home';
   } else {
      $view = $_GET['view'];
   }

   $metaDescription = $descriptions[strtolower($view)];

   // the use of this module is to catch the incoming requests and push them in the right direction.
   $control = "";
   $action  = "show";

   if (isset($_SESSION['signed_in_user_id'])) {
      $control = "user";
   }

   if (array_key_exists("controller", $_GET)) {
      $control = $_GET["controller"];
   }

   if (array_key_exists("action", $_GET)) {
      $action = $_GET["action"];
   }

   if ($control !== "") {
      loadController($control, $action);
   } else {
      respondWithView($view, []);
   }
?>