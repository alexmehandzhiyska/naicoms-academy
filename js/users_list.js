let users = [];
const usersSectionEl = document.getElementById('users');

let xhr = new XMLHttpRequest();
xhr.open('get', 'https://random-data-api.com/api/users/random_user?size=15');
xhr.send();

xhr.onload = function () {
    users = JSON.parse(xhr.response);

    localStorage.setItem('users', JSON.stringify(users));
    displayUserCards(users);
}

function displayUserCards (users) {
    for (const user of users) {
        const cardArticleEl = document.createElement('article');
        cardArticleEl.classList.add('user-card');

        const namePEl = document.createElement('p');
        namePEl.textContent = `${user.first_name} ${user.last_name}`;
    
        const usernamePEl = document.createElement('p');
        usernamePEl.textContent = user.username;
    
        const emailPEl = document.createElement('p');
        emailPEl.textContent = user.email;
    
        const avatarImgEl = document.createElement('img');
        avatarImgEl.setAttribute('src', user.avatar);
    
        const phoneNumberPEl = document.createElement('p');
        phoneNumberPEl.textContent = user.phone_number;

        const detailsLinkEl = document.createElement('a');
        detailsLinkEl.textContent = 'Details';
        detailsLinkEl.setAttribute('href', `../user.html?userId=${user.id}`);
        
        cardArticleEl.append(namePEl, usernamePEl, emailPEl, avatarImgEl, phoneNumberPEl, detailsLinkEl);
    
        usersSectionEl.append(cardArticleEl);
    }
}
