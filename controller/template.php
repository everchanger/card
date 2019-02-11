<?php

namespace controller;

class template extends base 
{
	public function render() 
	{
      $template = filter_input(INPUT_POST, 'template', FILTER_SANITIZE_STRING);
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $preview = isset($_POST['preview']);
      $landscape = isset($_POST['landscape']);

      echo renderTemplate($template, [$name, $name, $name, $name, $name, $name, $name, $name, $name, $name], $landscape, $preview);
   }
};

?>