const deleteButtons = document.querySelectorAll('button[id^="delete-button-"]');
deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});

// Fonction pour copier la valeur du bouton au presse-papier
const copyButtons = document.querySelectorAll('.link-button');
copyButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Empêcher le comportement par défaut
        event.stopPropagation(); // Empêcher la propagation de l'événement de clic
        const icon = button.querySelector('i');

        const valueToCopy = button.getAttribute('data-value');
        navigator.clipboard.writeText(valueToCopy).then(() => {
            // Changer l'icône au succès
            icon.classList.remove('fa-link');
            icon.classList.add('fa-check');

            // Remettre l'icône d'origine après 2 secondes
            setTimeout(() => {
                icon.classList.remove('fa-check');
                icon.classList.add('fa-link');
            }, 3000);
        }).catch(err => {
            console.error('Failed to copy:', err);
        });
    });
});
