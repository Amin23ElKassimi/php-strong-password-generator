<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dajelect - <?php echo $_SESSION['email'] ?? 'guest'; ?></title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="d-flex justify-content-center pt-3 mb-4">
        <h1 class="text-center mb-3">
            Strong Password Generator
        </h1>
    </header>
    <main>
        <!-- fORM -->
        <section class="container" id="userform">
            <div class="row">
                <div class="col-12">
                <form action="./passgenerated.php" method="GET">
                    <div class="mb-3">
                        <label for="lengthpass" class="form-label">Lunghezza Passsword</label>
                        <input type="number" id="lengthpass" name="lengthpass" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
  
                </div>
            </div>
        </section>
    </main>
    <!-- Aggiunto da riccardo per caricare il file Style CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="./js/script.js"></script> -->
</body>
</html>
