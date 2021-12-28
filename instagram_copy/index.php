<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Copy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #fafafa;
        }

        .navbar {
            border-bottom: 1px solid #dbdbdb;
            background-color: #ffff;
        }

        .navbar li.nav-item:not(:last-child) {
            margin-right: 5px;
        }

        .navbar li.nav-item a.nav-link {
            color: #262626;
        }

        .navbar li.nav-item a.nav-link:hover {
            color: #000000;
        }

        .container {
            max-width: 975px;
        }

        .stories {
            width: 100%;
            padding: 10px;
            display: inline-flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .story {
            /* width: 80px;
            height: 100px; */
            margin-right: 10px;
        }

        .story img {
            border-radius: 50%;
        }

        .username {
            max-width: 76px;
            margin-top: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            white-space: nowrap;
        }

        .card-header {
            width: 100%;
            height: 61px;
            padding: 14px 4px 14px 16px;
            background-color: #fff;
        }

        .card-header a {
            color: #000000;
        }

        .card-header img {
            border-radius: 50%;
        }

        .card-body {
            padding: 0;
        }

        .card-body a {
            color: #262626;
            background-color: #fff;
            display: inline-flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .card-body img {
            width: 100%;
            height: 100%;
        }

        .card-footer {
            background-color: #fff;
        }

        .card-footer a {
            color: #262626;
            text-decoration: none;
        }

        .card-footer form {
            width: 77%;
            display: inline-flex;
            flex-direction: row;
            flex-grow: 1;
        }

        .card-footer input {
            display: inline-flex;
            flex-direction: row;
            flex-grow: 1;
            outline: none;
            border: none
        }

        .card-footer input:focus {
            display: inline-flex;
            flex-direction: row;
            flex-grow: 1;
            outline: none;
            border: none
        }

        .pub {
            border: none;
            background-color: #fff;
            color: #0095f6;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png" width="102" alt="Logo do aplicativo Instagram">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg aria-label="Página inicial" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Messenger" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path d="M36.2 16.7L29 22.2c-.5.4-1.2.4-1.7 0l-5.4-4c-1.6-1.2-3.9-.8-5 .9l-6.8 10.7c-.7 1 .6 2.2 1.6 1.5l7.3-5.5c.5-.4 1.2-.4 1.7 0l5.4 4c1.6 1.2 3.9.8 5-.9l6.8-10.7c.6-1.1-.7-2.2-1.7-1.5zM24 1C11 1 1 10.5 1 23.3 1 30 3.7 35.8 8.2 39.8c.4.3.6.8.6 1.3l.2 4.1c0 1 .9 1.8 1.8 1.8.2 0 .5 0 .7-.2l4.6-2c.2-.1.5-.2.7-.2.2 0 .3 0 .5.1 2.1.6 4.3.9 6.7.9 13 0 23-9.5 23-22.3S37 1 24 1zm0 41.6c-2 0-4-.3-5.9-.8-.4-.1-.8-.2-1.3-.2-.7 0-1.3.1-2 .4l-3 1.3V41c0-1.3-.6-2.5-1.6-3.4C6.2 34 4 28.9 4 23.3 4 12.3 12.6 4 24 4s20 8.3 20 19.3-8.6 19.3-20 19.3z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Encontrar pessoas" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path clip-rule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg aria-label="Feed de atividades" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                    <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img loading="lazy" width="22" height="22" class="rounded-circle" src="https://picsum.photos/56" alt="Foto de perfil de usuário">
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Perfil</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Salvos</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Configurações</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sair</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="feed" class="feed mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="stories card mb-4">
                            <div class="story text-center">
                                <img src="https://picsum.photos/56" width="56" height="56" alt="Foto de perfil do usuário">
                                <div class="username">@dapessoa123</div>
                            </div>
                        </div>
                        <article class="card mb-4">
                            <div class="card-header">
                                <img src="https://picsum.photos/56" width="32" height="32" alt="Foto de perfil do usuário">
                                <span class="header-username">@dapessoa123</span>
                            </div>
                            <div class="card-body">
                                <img src="https://picsum.photos/600" alt="Foto">
                                <div class="ms-3 mt-3 mb-3">
                                    <a class="me-3" href="#">
                                        <svg aria-label="Curtir" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                            <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="me-3" href="#">
                                        <svg aria-label="Comentar" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                            <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a class="me-3" href="#">
                                        <svg aria-label="Compartilhar" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22">
                                            <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <a href="">
                                        <svg aria-label="Emoji" fill="currentColor" height="24" role="img" viewBox="0 0 48 48" width="24">
                                            <path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z">
                                            </path>
                                            <path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z">
                                            </path>
                                        </svg>
                                    </a>
                                    <form action="">
                                        <input type="text" placeholder="Adicione um comentário...">
                                    </form>
                                    <button class="pub ms-auto" type="submit">Publicar</button>
                                </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>