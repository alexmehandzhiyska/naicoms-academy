// const asideEl = document.getElementById('side-nav');
// const menuBarEl = document.getElementById('bar-menu');
// const closeBtnEl = document.querySelector('.close-btn');

// menuBarEl.addEventListener('click', () => {
//     asideEl.style.display = 'flex';
// });

// closeBtnEl.addEventListener('click', () => {
//     asideEl.style.display = 'none';
// })

$("#bar-menu").on('click', () => $("#side-nav").show())
$(".close-btn").on('click', () => $("#side-nav").hide());