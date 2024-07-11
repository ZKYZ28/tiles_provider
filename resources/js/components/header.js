const navLinks = document.querySelector('.nav-links')
const burgerMenuButton = document.getElementById('burger-menu-header');

if (navLinks){
    burgerMenuButton.addEventListener('click', function(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[10%]')
    });

    document.addEventListener('DOMContentLoaded', function () {

        const dropdownButton = document.getElementById('dropdownAvatarNameButton');
        const dropdownMenu = document.getElementById('dropdownAvatarName');

        if(dropdownButton) {
            dropdownButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });
        }
    });


    document.addEventListener('DOMContentLoaded', function () {
        const dropdownAdminButton = document.getElementById('dropdownAdminButton');
        const dropdownAdminMenu = document.getElementById('dropdownAdminSection');

        if(dropdownAdminButton) {
            dropdownAdminButton.addEventListener('click', function () {
                dropdownAdminMenu.classList.toggle('hidden');
            });
        }
    });

    const updateProfileModal = document.getElementById('update_profile-modal');
    const closeUpdateProfileModal = document.getElementById('close-update_profile-modal');

    if(updateProfileModal) {
        closeUpdateProfileModal.addEventListener('click', function () {
            updateProfileModal.classList.add('hidden');
        })
    }

}
