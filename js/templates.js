document.addEventListener("DOMContentLoaded", onDocumentLoaded);

let nameFields = [];
let cards = [];

function onDocumentLoaded() {
   const textPreview = document.getElementById('text-preview');
   const fontSelect = document.getElementById('font-select');
   nameFields = document.getElementsByClassName('name-field');
   cards = document.getElementsByClassName('card');
}

function textPreviewChanged(value) {
   for(const field of nameFields) {
      field.innerHTML = value;
   }
}

function selectFontChange(value) {
   for(const card of cards) {
      if(value === 'romantic') {
         card.style.fontFamily = 'Charm, cursive';
      } else {
         card.style.fontFamily = 'Roboto, sans-serif';
      }
      
   }
}