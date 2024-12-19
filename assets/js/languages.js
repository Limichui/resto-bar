const dropdownButton = document.getElementById("languageDropdown");
const menuItems = document.querySelectorAll(".dropdown-item");

const langValue = document.getElementById('txt-lang').value;
const flagValue = document.getElementById('txt-flag').value;

console.log('Lenguaje:',langValue);
console.log('Bandera:',flagValue);

function updateDropdown(selectedLanguage, selectedFlag) {
  // Actualizar el botón del dropdown con el idioma y la bandera seleccionados
  dropdownButton.innerHTML = `<img src="${selectedFlag}" alt="${selectedLanguage}"> ${selectedLanguage}`;

  // Mostrar todos los elementos del menú
  menuItems.forEach((item) => (item.style.display = "block"));

  // Ocultar el idioma seleccionado en la lista
  menuItems.forEach((item) => {
    if (item.getAttribute("data-language") === selectedLanguage) {
      item.style.display = "none";
    }
  });

  
}

// Configurar el evento para cada elemento del menú
menuItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    event.preventDefault(); // Evitar el comportamiento por defecto

    // Obtener los datos del idioma seleccionado
    const selectedLanguage = this.getAttribute("data-language");
    const selectedFlag = this.getAttribute("data-flag");
    let lang = '';

    if (selectedLanguage === 'English') lang = 'English';
    else if (selectedLanguage === 'Français') lang = 'Français';
    else if (selectedLanguage === 'Català') lang = 'Català';
    else lang = 'Español';

    // Mostrar el alert con el idioma seleccionado
    //alert(`Has seleccionado: ${selectedLanguage}`);
    // Cambiar el idioma llamando a la función
    updateLanguage(selectedLanguage,selectedFlag);
    //alert('flag: '+selectedFlag);
    // Actualizar el dropdown y ocultar el idioma seleccionado
    updateDropdown(selectedLanguage, selectedFlag);
  });
});

// Inicializar el dropdown con Español seleccionado
//updateDropdown("Español", "assets/img/flags/es.png");
updateDropdown(langValue, flagValue);

function updateLanguage(lang,flag) {
  fetch('views/pages/update_session.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `lang=${lang}&flag=${(flag)}`
  })
  .then(response => response.json())
  .then(data => {
      if (data.status === 'success') {
          //console.log('Language updated successfully');
          location.reload(); // Recargar la página
      } 
      /*else {
          console.error('Error updating language:', data.message);
      }*/
  })
  .catch(error => console.error('Error:', error));
}
