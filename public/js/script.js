const x = document.getElementById("container");

        x.style.display = "none";


            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');
            const content = document.getElementById('contents');
            const loginButton = document.getElementById('login');
            const registerButton = document.getElementById('test');



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
