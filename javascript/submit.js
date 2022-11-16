function validateAndSend(){
    // e.preventDefault()
  
    var name = document.querySelector('#name').value
    if(name.length < 8) alert('name length min 8');
  
    var email = document.querySelector('#email').value
    if(ValidateEmail(email) == false){
      alert('email not valid');
    }

 
    var password = document.querySelector('#password').value
    if(password.length < 8)  alert('password not valid');

    var password2 = document.querySelector('#repeatPassword').value
    if(password != password2)  alert('password repeat not same with password');
}

function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    return (false)
}
