$('#register-form').on('submit', e => {
    e.preventDefault();

    const formData = new FormData(e.target);
    const firstName = formData.get('first_name');
    const lastName = formData.get('last_name');
    const email = formData.get('email');
    const password = formData.get('password');
    const phone = formData.get('phone');

    $.ajax({
        url: 'register.php',
        method: 'POST',
        data: {
            login: 1,
            first_name: firstName,
            last_name: lastName,
            email: email,
            password: password,
            phone: phone
        },
        success: (response) => {
            if (response.includes('success')) {
                window.location = '../tables.php';
            }
        },
        dataType: 'text'
    });
});