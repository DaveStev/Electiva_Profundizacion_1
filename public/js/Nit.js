document.addEventListener('DOMContentLoaded', function () {
    const nitInput = document.getElementById('nit');

    nitInput.addEventListener('input', function () {
    
        this.value = this.value.replace(/[^0-9]/g, '');

        // Modificar el NIT cada vez que se escribe
        if (this.value.length >= 9) {
            this.value = this.value.replace(/(\d{1,9})(\d{0,4})/, '$1-$2').trim();
        }
    });
});
