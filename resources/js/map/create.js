document.getElementById('image_path').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('offer-image').src = e.target.result;
    };

    document.getElementById('offer-image').classList.remove('hidden');
    document.getElementById('upload-file').classList.add('mt-4');

    reader.readAsDataURL(file);
});


const images = document.querySelectorAll('.image-item');
images.forEach(image => {
    image.addEventListener('click', () => {
        images.forEach(img => {
            img.classList.remove('selected-image');
        });
        image.classList.add('selected-image');
        const selectedIndex = image.dataset.index;
        document.getElementById('selected_image_index').value = selectedIndex;
    });
});


$('#submit-form-btn').click(function(e) {
    $(this).html('<i class="fas fa-spinner fa-spin"></i> Processing...');
});
