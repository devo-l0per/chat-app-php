<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Chat App (Akhil) </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <img src="img/chat-img1.jpg">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand ">Chat App</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active  ak-a " href="#">Home</a>
                    <a class="nav-link ak-a  " href="#">Features</a>
                    <a class="nav-link ak-a" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Chat App</h1>
            <p class="lead">Chat with friends all around the world. Create Your own Personal Chat rooms</p>
            <p class="lead">
                <form action="claim.php" method ="post">
                <input class= "input-box" type="text" name="room">
                <button href="claim.php" class="button-self">Create Room</button>
                </form>
            </p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Made using Bootstrap 4 and styled by personal taste</p>
            </div>
        </footer>
    </div>
</body>

</html>