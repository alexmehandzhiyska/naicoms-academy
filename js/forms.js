const registerBtnEl = document.getElementById('register-btn');
const loginBtnEl = document.getElementById('login-btn');

const registerFormEl = document.getElementById('register');
const loginFormEl = document.getElementById('login');

registerBtnEl.addEventListener('click', () => {
    registerFormEl.style.display = 'flex';
    loginFormEl.style.display = 'none';
});

loginBtnEl.addEventListener('click', () => {
    loginFormEl.style.display = 'flex';
    registerFormEl.style.display = 'none';
});