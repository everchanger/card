document.addEventListener("DOMContentLoaded", onDocumentLoaded);

function onDocumentLoaded() {
   handleMobileNavbar();
}

function handleMobileNavbar() {
   const mobileMenu = document.getElementById('mobile-menu');
   const hamburgerButton = document.getElementById('hamburger-button');

   hamburgerButton.addEventListener('click', () => { 
      if (mobileMenu.classList.contains('hidden')) {
         mobileMenu.classList.remove('hidden')
      } else {
         mobileMenu.classList.add('hidden')
      }
   })
}