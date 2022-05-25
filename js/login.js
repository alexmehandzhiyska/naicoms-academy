$('#login-form').on('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    if (!formData.get('email') || !formData.get('password')) {
        alert("All fields are required!");
    }

    $.ajax(
        {
            url: 'login.php',
            method: 'POST',
            data: {
                login: 1,
                email: formData.get('email'),
                password: formData.get('password')
            },
            success: (response) =>  {
                if (response.includes('success')) {
                    window.location = '../tables.php';
                }
            },
            dataType: 'text'
        }
    )
});