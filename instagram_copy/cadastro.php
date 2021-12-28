<?php
include "database/create_user.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar • Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .card {
            width: 350px;
        }

        .login input {
            padding: 12px 0 4px 8px !important;
            font-size: 12px !important;
            width: 250px !important;
            height: 36px !important;
        }

        .login input:focus {
            padding: 12px 0 4px 8px !important;
            font-size: 12px !important;
            width: 250px !important;
            height: 36px !important;
            box-shadow: none;
        }

        .login label {
            color: #8e8e8e;
            padding: 7px 0 7px 8px !important;
            font-size: 12px !important;
            width: 250px !important;
            height: 20px !important;
        }

        .btn {
            width: 266px;
            height: 30px;
            font-size: 12px;
        }

        a {
            text-decoration: none;
        }

        .cadastro {
            width: 350px;
            height: 63px;
            font-size: 14px;
            padding: 18px 85px;
        }

        .cadastro span {
            width: 237px;
            height: 48px;
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col" style="padding: 80.5px 0">
                    <div class="card ms-auto me-auto">
                        <div class="mt-4 ms-auto me-auto mb-4">
                            <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png" width="175" alt="Logo do aplicativo Instagram">
                        </div>
                        <div class="ms-auto me-auto">
                            <form action="cadastro.php" method="POST">
                                <div class="login form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Telefone, nome de usuário ou email">
                                    <label for="email">Número do celular ou email</label>
                                </div>
                                <div class="login form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nome completo">
                                    <label for="username">Nome completo</label>
                                </div>
                                <div class="login form-floating mb-3">
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nome de usuário">
                                    <label for="fullname">Nome de usuário</label>
                                </div>
                                <div class="login form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Senha" name="senha">
                                    <label for="senha">Senha</label>
                                </div>
                                <input type="submit" class="btn btn-primary mt-3 mb-4" name="submit" value="submit">
                            </form>
                        </div>
                    </div>
                    <div class="card cadastro mt-3 ms-auto me-auto">
                        <span>Tem uma conta?
                            <a href="login.php">Conecte-se</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>