<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>

<body>
    <main class="laravel-back">
        <div class="container">
            <h1 class="title">Questa è la mia prima pagina di Laravel</h1>
            <figure>
                <img class="logo-lara" src="https://laravel.com/img/logomark.min.svg" alt="">
            </figure>
        </div>
    </main>
</body>

<style>
    body {
        overflow: hidden;
        height: 100vh;
        width: 100vw;
        background: rgb(242, 59, 47);
        background: linear-gradient(155deg, rgba(242, 59, 47, 1) 39%, rgba(35, 35, 35, 1) 100%);
    }

    .title {
        color: white;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
        width: 80vw;
        overflow: hidden;
    }

    .logo-lara {
        width: 100px;
    }

    .logo-lara:hover {
        transform: rotate(300deg);
        transition: linear 2s;
    }
</style>

</html>