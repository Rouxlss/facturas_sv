<!DOCTYPE html>
<html>
    <head>
        <title>sistema WEB STI</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/css.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
            rel="stylesheet"
        />
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta
            name="description"
            content="Sistema de facturación web, FROM soluciones TI, San Salvador"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <img class="wave" src="Assets/img/wave.png" />
        <div class="container">
            <div class="img"></div>
            <div class="login-content">
                <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
                    <img src="Assets/img/log.png" />
                    <h2 class="title">LOGIN</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Correo electrónico</h5>
                            <input type="text" name="email" class="input" />
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password" name="password" class="input" />
                        </div>
                    </div>
                    <a href="#">Olvidaste la contraseña?</a>
                    <input type="submit" value="Iniciar Sesion" name="Enviar" class="btn" value="Iniciar" />
                </form>
            </div>
        </div>
        <script>
            const inputs = document.querySelectorAll(".input");

            function addcl() {
                let parent = this.parentNode.parentNode;
                parent.classList.add("focus");
            }

            function remcl() {
                let parent = this.parentNode.parentNode;
                if (this.value == "") {
                    parent.classList.remove("focus");
                }
            }

            inputs.forEach((input) => {
                input.addEventListener("focus", addcl);
                input.addEventListener("blur", remcl);
            });
        </script>
    </body>
</html>
