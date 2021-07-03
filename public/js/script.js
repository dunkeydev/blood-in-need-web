            const x = document.getElementById("container");

            x.style.display = "none";

            const err1 = document.getElementById('error1').innerText;
            const err2 = document.getElementById('error2').innerText;



            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');
            const content = document.getElementById('contents');
            const loginButton = document.getElementById('login');
            const registerButton = document.getElementById('test');
            const error1 = document.getElementById('error1');
            const error2 = document.getElementById('error2');




            if(err1!=="")
            {
                x.style.display = "block";
                container.classList.add("right-panel-active")
            }
            else
            {
                error1.style.display = "none";
            }

            if(err2!=="")
            {
                x.style.display = "block";
                container.classList.add("right-panel-active")
            }
            else
            {
                error2.style.display = "none";
            }


            loginButton.addEventListener('click', () => {
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none";
                }
            });


            registerButton.addEventListener('click', () => {
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none";
                }
            });


            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });


            function verifyPassword() {
                var pw = document.getElementById("password").value;
                var cpw = document.getElementById("confirmpassword").value;

                //check empty password field
                if(pw == "" || cpw =="") {
                    document.getElementById("message").innerHTML = "**Fill the password please!";
                    alert("Password is empty");
                    return false;
                }
                else
                {
                    if(pw!==cpw)
                    {
                        alert("Password Not Matched!!!");
                    }
                    else if(pw.length < 8) {
                        // document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
                        alert("Password length must be atleast 8 characters");
                        return false;
                    }

                    else if(pw.length > 15) {
                        // document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
                        alert("Password length must not exceed 15 characters");
                        return false;
                    }
                }
            }

