const dropdownButton = document.getElementById("languageDropdown");
const menuItems = document.querySelectorAll(".dropdown-item");

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

    // Mostrar el alert con el idioma seleccionado
    alert(`Has seleccionado: ${selectedLanguage}`);

    // Actualizar el dropdown y ocultar el idioma seleccionado
    updateDropdown(selectedLanguage, selectedFlag);
  });
});

// Inicializar el dropdown con Español seleccionado
updateDropdown("Español", "assets/img/flags/es.png");
