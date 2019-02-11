<?php
   $name = 'Agneta Johansson';
   $fonts = ['romantic', 'roboto'];

   include('breadcrumb.php');
?>

<div class="m-2 bg-grey-lighter rounded p-2 shadow-md">
   <label
      class="font-bold text-grey-dark mr-4 w-full"
   >
      Förhandstest
      <input
         id="text-preview"
         class="bg-white rounded border border-grey p-2 ml-2" 
         type="text"
         value="<?= $name ?>"
         oninput="textPreviewChanged(this.value)" 
      />
   </label>
   <label class="font-bold text-grey-dark mr-4">
      Typsnitt
      <select 
         id="font-select"
         class="bg-white rounded border border-grey p-1 ml-2"
         onchange="selectFontChange(this.options[this.selectedIndex].value)"
      >
         <?php foreach($fonts as $font): ?>
         <option value="<?=$font?>"><?=ucfirst($font)?></option>
         <?php endforeach; ?>
      </select>
   </label>
</div>
<div class="template-selector flex flex-wrap">
<?php

/* width: 10.5cm; height: 3.7cm;" 
      10,5/3,7 = 2,83783
      50 * 2,8373 = 141
      100 = 281
      150 = 425
*/

$templateDirectory = './uploads/templates';

foreach (new DirectoryIterator($templateDirectory) as $fileInfo) {
   if($fileInfo->isDot() || !$fileInfo->isDir()) {
      continue;
   }
   ?>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
         <a href="#" class="pt-6 flex flex-col items-center bg-grey-lighter hover:bg-grey-light rounded p-2 shadow-md" >
            <div class="card shadow-md" style="box-sizing: border-box;">
               <?php include $templateDirectory . '/' . $fileInfo->getFilename() .'/index.php'; ?>
            </div>
            <div class="px-2 mt-4 flex justify-between w-full text-sm">
               <label class="text-xl font-semibold mt-2 text-grey-dark"><?= ucfirst($fileInfo->getFilename()) ?></label>
               <button class="p-2 text-white bg-green hover:bg-green-dark hover:text-grey-lightest rounded border-2 border-green-light hover:border-green hover:shadow-inner"><i class="fas fa-forward"></i> Använd</button>
            </div>
         </a>
      </div>
<?php
}
?>
</div>