<?php
   $descriptions = [];
   $descriptions['home'] = "Printable seating cards.";
   $descriptions['about'] = "About the page";
   $descriptions['style'] = "About the page";
   $descriptions['templates'] = "About the page";
   $descriptions['help'] = "About the page";

   if(!isset($_GET['view']) || $_GET['view'] == null) {
      $view_file_name = 'home';
   } else {
      $view_file_name = $_GET['view'];
   }

   $metaDescription = $descriptions[strtolower($view_file_name)];

   include "view/_template.php";
?>