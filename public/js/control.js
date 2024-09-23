let currentSectionIndex = 0;
const sections = document.querySelectorAll('.carousel-section');

function showSection(index) {
    // Oculta todas las secciones
    sections.forEach(section => {
        section.style.display = 'none';
    });

    // Muestra la sección deseada
    sections[index].style.display = 'block';
}

function prevSection() {
    // Muestra la sección anterior
    currentSectionIndex = (currentSectionIndex - 1 + sections.length) % sections.length;
    showSection(currentSectionIndex);
}

function nextSection() {
    // Muestra la siguiente sección
    currentSectionIndex = (currentSectionIndex + 1) % sections.length;
    showSection(currentSectionIndex);
}

// Muestra la primera sección al cargar la página
showSection(currentSectionIndex);