const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'));

const btnLogin = document.getElementById('btnLogin');

btnLogin.addEventListener('click', (e) => {
    modalLogin.show();
});