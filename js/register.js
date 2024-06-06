let name = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirmpass = document.getElementById("confirm_password");

function Changer(e)
{
    switch(e)
    {
        case name:
        if(e.value == "")
        {
            name.classList.add("is-invalid");
            name.classList.remove("is-valid");
        }
        else
        {
            name.classList.add("is-valid");
            name.classList.remove("is-invalid");
        }
        break;
        case email:
        if(ValidateEmail(e.value) != true)
        {
            email.classList.add("is-invalid");
            email.classList.remove("is-valid");
        }
        else
        {
            email.classList.add("is-valid");
            email.classList.remove("is-invalid");
        }
        break;

        case password:
            if(e.value.length < 8)
            {
                password.classList.add("is-invalid");
                password.classList.remove("is-valid");
            }
            else
            {
                password.classList.add("is-valid");
                password.classList.remove("is-invalid");
            }
        break;
        case confirmpass:
            if(e.value != password.value || password.classList.contains("is-invalid"))
            {
                confirmpass.classList.add("is-invalid");
                confirmpass.classList.remove("is-valid");
            }
            else
            {
                confirmpass.classList.add("is-valid");
                confirmpass.classList.remove("is-invalid");
            }
        break;
    }
}

function Register()
{
    if(name.value.trim() != "" && name.classList.contains("is-valid") && email.value.trim() != "" && email.classList.contains("is-valid") && password.classList.contains("is-valid") && password.value.trim() != "" && confirmpass.classList.contains("is-valid") && confirmpass.value.trim() != "")
        {
            document.getElementById("control").submit();
        }
        else
        {
            alert("Insira os dados corretamente!");
            let inputs = document.querySelectorAll(".form-control");

        inputs.forEach((e) =>
        {
            if(e.value == "")
                {
                    e.classList.add("is-invalid");
                    e.classList.remove("is-valid");
                }
            
        });
        }
}
function ValidateEmail(email)
{
    let emailchars = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return emailchars.test(email);
}
function test()
{
    alert("OK");  
    console.log("Tested");
}


