const userSectionEl = document.querySelector('.user');
const queryString = window.location.search;
const queryParams = new URLSearchParams(queryString)
const userId = queryParams.get('userId');
const users = JSON.parse(localStorage.getItem('users'));

const user = users.find(user => user.id == userId);

for (const entry of Object.entries(user)) {
    if (entry[0] == 'address') {
        userSectionEl.innerHTML += `<p class="user-data">${entry[0]}: ${entry[1].city} ${entry[1].street_name} ${entry[1].street_address}</p>`;
    } else if (entry[0] == 'credit_card') {
        userSectionEl.innerHTML += `<p class="user-data">${entry[0]}: ${entry[1].cc_number}</p>`;
    } else if (entry[0] == 'subscription') {
        userSectionEl.innerHTML += `<p class="user-data">${entry[0]}: ${entry[1].payment_method} ${entry[1].plan} ${entry[1].status} ${entry[1].term}</p>`;
    } else {
        userSectionEl.innerHTML += `<p class="user-data">${entry[0]}: ${entry[1]}</p>`;
    }
}