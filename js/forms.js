const formsWrapperEl = document.getElementById('forms-wrapper');

const registerBtnEl = document.getElementById('register-btn');
const loginBtnEl = document.getElementById('login-btn');

const registerFormEl = document.getElementById('register-form');
const loginFormEl = document.getElementById('login-form');

const usersTableBodyEl = document.querySelector('#users-table tbody');

registerBtnEl.addEventListener('click', () => {
    registerFormEl.style.display = 'flex';
    loginFormEl.style.display = 'none';
});

loginBtnEl.addEventListener('click', () => {
    loginFormEl.style.display = 'flex';
    registerFormEl.style.display = 'none';
});

registerFormEl.addEventListener('submit', e => {
    e.preventDefault();

    const formData = new FormData(e.target);
    const firstName = formData.get('first-name');
    const lastName = formData.get('last-name');
    const email = formData.get('email');
    const gender = formData.get('male') == 'on' ? 'male' : 'female';
    const birthday = formData.get('birthday');
    const phone = formData.get('phone');

    const trEl = document.createElement('tr');

    const firstNameTdEl = document.createElement('td');
    firstNameTdEl.textContent = firstName;

    const lastNameTdEl = document.createElement('td');
    lastNameTdEl.textContent = lastName;

    const emailTdEl = document.createElement('td');
    emailTdEl.textContent = email;

    const genderTdEl = document.createElement('td');
    genderTdEl.textContent = gender;

    const birthdayTdEl = document.createElement('td');
    birthdayTdEl.textContent = birthday;

    const phoneTdEl = document.createElement('td');
    phoneTdEl.textContent = phone;

    const timestampTdEl = document.createElement('td');
    timestampTdEl.textContent = new Date();

    trEl.append(firstNameTdEl, lastNameTdEl, emailTdEl, genderTdEl, birthdayTdEl, phoneTdEl, timestampTdEl);
    usersTableBodyEl.append(trEl);
});