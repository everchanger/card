<?php
include('breadcrumb.php');
?>

<h1>Vald mall:</h1>
<div><?= ucfirst($template) ?></div>
<div
   class="card shadow-md"
   style="box-sizing: border-box;"
>
   <?php include TEMPLATE_DIRECTORY . '/' . $template .'/index.php'; ?>
</div>