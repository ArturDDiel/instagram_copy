<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            display: flex;
        }

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
            width: 250px;
            height: 36px;
            box-shadow: none;
        }

        div .celular {
            width: 454px;
            height: 618px;
        }

        .divisao {
            display: flex;
            width: 250px;
        }

        .linha-div {
            width: 106px;
            height: 1px;
            background-color: #ccc;
        }

        .ou-div {
            width: 25px;
            font-size: 12px;
            font-weight: 600;
            color: #ccc;
        }

        .fb span img {
            width: 16px;
        }

        .text-fb {
            font-size: 14px;
            display: inline-block;
        }

        .text-senha {
            font-size: 12px;
            display: inline-block;
            color: #030388;
        }

        a {
            text-decoration: none;
        }

        .cadastro {
            width: 350px;
            height: 63px;
            font-size: 14px;
            padding: 18px 60px;
        }

        .cadastro span {
            width: 237px;
            height: 48px;
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row" style="padding: 0 146px;">
            <div class="ms-auto col">
                <img class="celular" src="https://www.instagram.com/static/images/homepage/home-phones@2x.png/9364675fb26a.png" alt="">
            </div>
            <div class="col" style="padding: 80.5px 0">
                <div class="card me-auto mt-auto">
                    <div class="mt-4 ms-auto me-auto mb-4">
                        <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png" width="175" alt="Logo do aplicativo Instagram">
                    </div>
                    <div class="ms-auto me-auto">

                        <form action="login.php" method="POST">
                            <div class="login form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Telefone, nome de usuário ou email">
                                <label for="floatingInput">Telefone, nome de usuário ou email</label>
                            </div>
                            <div class="login form-floating">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
                                <label for="floatingPassword">Senha</label>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">
                        </form>

                        <?php include "database/verify_user.php" ?>

                        <div class="divisao mt-3">
                            <span class="linha-div mt-auto mb-auto"></span>
                            <span class="ou-div ms-auto me-auto">OU</span>
                            <span class="linha-div mt-auto mb-auto"></span>
                        </div>
                    </div>

                    <a class="fb ms-auto me-auto mt-4" href="">
                        <span>
                            <img src="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4.png" alt="">
                        </span>
                        <span class="text-fb">Entrar com Facebook</span>
                    </a>
                    <a class="fb ms-auto me-auto mt-4 mb-4" href="">
                        <span class="text-senha">Esquesceu a senha?</span>
                    </a>
                </div>
                <div class="card cadastro mt-3 mb-auto">
                    <span>Não tem uma conta?
                        <a href="cadastro.php">Cadastre-se</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>