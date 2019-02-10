<?php $templateDirectory = './uploads/templates'; ?>
<div class="flex flex-col items-center" >
   <div class="bg-grey-dark rounded text-grey-light p-5 w-4/5 mb-4">
      <h1 class="text-center text-lg mb-2">Placeringskort</h1>
      <p class="text-center text-sm">Fixa snygga placeringskort snabbt och lätt online, välj från över 100 olika mallar för olika tillfällen.</p>
   </div>
	<div class="w-4/5 flex flex-col items-center text-center text-sm md:flex-row md:justify-between md:items-stretch">
     <div class="w-4/5 my-4 mr-2 flex flex-col items-center bg-grey-dark rounded text-grey-light p-3 md:w-1/4">
         <i class="fas fa-address-book text-3xl my-4"></i>
         <span class="mb-4">1 ) Ladda upp din gästlista</span>
      </div>
      <div class="w-4/5 my-4 mx-2 flex flex-col items-center bg-grey-dark rounded text-grey-light p-3 md:w-1/4">
         <i class="fas fa-file text-3xl my-4"></i>
         <span class="mb-4 ">2 ) Välj en mall</span>
      </div>
      <div class="w-4/5 my-4 mx-2 flex flex-col items-center bg-grey-dark rounded text-grey-light p-3 md:w-1/4">
         <i class="fas fa-download text-3xl my-4"></i>
         <span class="mb-4">3 ) Ladda ner</span>
      </div>
      <div class="w-4/5 my-4 ml-2 flex flex-col items-center bg-grey-dark rounded text-grey-light p-3 md:w-1/4">
         <i class="fas fa-print text-3xl my-4"></i>
         <span class="mb-4 ">4 ) Skriv ut!</span>
      </div>
   </div>
   <form class="w-full bg-grey-darkest h-16 flex items-center" method="post" action="?controller=template&action=render">
      <div class="w-full flex justify-around">
         <input type="text" value="Funkster McFunky" name="name" />
         <select name="template">
            <?php foreach (new DirectoryIterator($templateDirectory) as $fileInfo): ?>
            <?php if($fileInfo->isDot() || !$fileInfo->isDir()) { continue; } ?>
            <option value="<?=$fileInfo->getFilename()?>"><?=ucfirst($fileInfo->getFilename())?></option>
            <?php endforeach; ?>
         </select>
         <label class="text-grey-light"> Preview
         <input type="checkbox" value="1" checked name="preview" />
         </label>
         <label class="text-grey-light"> Landscape
         <input type="checkbox" value="1" checked name="landscape" />
         </label>
         <button class="bg-grey border-black" type="submit">Skicka</button>
      </div>
   </form>
</div>
