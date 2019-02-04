<?php

namespace controller;

class template extends base 
{
	public function render() 
	{
      $tempalteId = filter_input(INPUT_POST, 'template_id', FILTER_SANITIZE_STRING);
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
      $preview = isset($_POST['preview']);
      $landscape = isset($_POST['landscape']);

      echo renderTemplate('test', [$name, $name], $landscape, $preview);
   }
};

?>