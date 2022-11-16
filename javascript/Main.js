//FUNGSI PENGECEKAN 

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;
const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    return re.test(password);
};
const repeatPassword = (repeat) =>{
    
}

const validateEmail = (email) => {
    if (!isRequired(email)) {
        alert('Email cannot be blank.');
        return false;
    } else if (!isEmailValid(email)) {
        alert('Email is not valid.');
        return false;
    }
    return true;
};
const validatePassword = (password) => {
    if (!isRequired(password)) {
        alert('Password cannot be blank.');
        return false;
    } else if (!isBetween(password.length, 8, 100)) {
        alert('Password must be between 8 and 100 characters.');
        return false;
    } else if (!isPasswordSecure(password)) {
        alert('Password must contain at least one uppercase, lowercase and number.');
        return false;
    }
    return true;
};

//FUNGSI VALIDASI

//LOGIN FORM

const login = document.getElementById('login');

loginForm.addEventListener('submit', (login) => {
    login.preventDefault();

    if (validateEmail(loginForm.email.value) && validatePassword(loginForm.password.value)) {
        console.log(loginForm.email.value);
        console.log(loginForm.password.value);
        console.log('Login successful!');
        alert('Login Berhasil');
        window.location.replace("index.html");
    }     
});

//REGISTER FORM

const registration = document.getElementById('registration');

loginForm.addEventListener('submit', (login) => {
    login.preventDefault();

    if (validateEmail(loginForm.email.value) && validatePassword(loginForm.password.value)) {
        console.log(loginForm.email.value);
        console.log(loginForm.password.value);
        console.log('Login successful!');
        alert('Login Berhasil');
        window.location.replace("index.html");
    }     
});
