<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords </title>
</head>

<body>

    <div class="container">

        <h1>Scrivi un testo</h1>

        
        <form action="censored.php" method="GET">
            <div class="container-fluid">
                <textarea class="form-control form-control-lg" placeholder="scrivi qui il testo" rows="5" name="user_text" style="width: 30vw; height: 100px" ;></textarea>
            </div>
            <h1> Inserisci la parola da censurare</h1>
            <textarea class="form-control"="scrivi qui la parola da censurare" style="height: 50px" name="bad_word"></textarea>

            <button type="submit">Send</button>
        </form>

    </div>

</body>

</html>