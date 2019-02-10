document.addEventListener("DOMContentLoaded", onDocumentLoaded);

var nameFields = [];
var cards = [];

function onDocumentLoaded() {
   var textPreview = document.getElementById('text-preview');
   var fontSelect = document.getElementById('font-select');
   nameFields = document.getElementsByClassName('name-field');
   cards = document.getElementsByClassName('card');
}

function textPreviewChanged(value) {
   for(var i = 0; i < nameFields.length; ++i) {
      var field = nameFields[i];
      field.innerHTML = value;
   }
}

function selectFontChange(value) {
   for(var i = 0; i < cards.length; ++i) {
      var card = cards[i];
      if(value === 'romantic') {
         card.style.fontFamily = 'Charm, cursive';
      } else {
         card.style.fontFamily = 'Roboto, sans-serif';
      }
   }
}