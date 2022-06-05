function validateform()
        {
            var password = document.getElementById("psw")  , confirm_password = document.getElementById("psw-repeat");
            
            fname.onchange = validateform;
            lname.onchange = validateform;
            if(password != confirm_password)
             {
                alert("Passwords Don't Match");
             }
            else
            {
                //gotologin();
                confirm_password.setCustomValidity('');
            }
            password.onchange = validateform;
        confirm_password.onclick = validateform;
        }
        // function gotologin()
        // {
            // window.document.location='login page.html';
        // } 
    function cancel() 
    {
        document.getElementById("Sign-Up").reset();
    }