document.addEventListener('DOMContentLoaded', function() {
    const temaToggleBtn = document.getElementById('tema-toggle');
    const body = document.body;

    temaToggleBtn.addEventListener('click', function() {
        body.classList.toggle('dark-mode');

        if (body.classList.contains('dark-mode')) {
            temaToggleBtn.textContent = 'modo claro';
        } else {
            temaToggleBtn.textContent = 'modo oscuro';
        }
    });
});
