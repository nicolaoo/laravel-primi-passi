<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="card">
                    <ul class="list-contact">
                        <li class="bat">
                            <p class="text text-batman">
                                Batman
                            </p>

                        </li>
                        <li class="iron">
                            <p class="text">
                                Iroman
                            </p>

                        </li>
                        <li class="spide">
                            <p class="text">
                                Spiderman
                            </p>

                        </li>
                        <li class="super">
                            <p class="text">
                                Superman
                            </p>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

<style>
    html {
        font-family: 'Secular One', sans-serif;
    }

    main,
    body {
        overflow: hidden;
        height: 100vh;
        width: 100vw;
        background: rgb(255, 209, 0);
        background: linear-gradient(285deg, rgba(255, 209, 0, 1) 25%, rgba(0, 171, 72, 1) 100%);
    }

    .row {
        display: flex;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        align-items: center;
        justify-content: center;
    }

    .card {
        padding: 10px 25px;
        border: 1px solid white;
        border-radius: 10px;
    }

    .text {
        margin: 0;
        padding: 0;
    }

    .list-contact {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .list-contact li {
        padding: 30px 55px;
        object-fit: cover;
        aspect-ratio: 12/5;
        object-position: center;
        color: white;
        font-size: 30px;
    }

    .list-contact li:hover {
        border-radius: 15px;
        object-fit: cover;
        aspect-ratio: 12/5;
        object-position: center;
        position: relative;
    }

    .text:hover {
        position: absolute;
        top: 40px;
        right: 9px;
        font-size: 25px;
    }

    .bat:hover {
        background-image: url("https://mr.comingsoon.it/imgdb/locandine/235x336/57933.jpg");
    }

    .spide:hover {
        background-image: url("https://mr.comingsoon.it/imgdb/locandine/235x336/61645.jpg");
    }

    .iron:hover {
        background-image: url("https://mr.comingsoon.it/rsz/PrimoPiano/150681_ppl.jpg?preset=wide760");
    }

    .super:hover {
        background-image: url("https://mr.comingsoon.it/rsz/PrimoPiano/152991_ppl.jpg?preset=wide760");
    }
</style>

</html>