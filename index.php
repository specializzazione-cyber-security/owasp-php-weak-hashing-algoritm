<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
if ($_FILES['f1']['size'] > 0 && $_FILES['f2']['size'] > 0) {

    $f1_name = $_FILES['f1']['tmp_name'];
    $f2_name = $_FILES['f2']['tmp_name'];
    $f1 = file_get_contents($f1_name);
    $f2 = file_get_contents($f2_name);

    if (hash('sha256',$f1) == hash('sha256',$f2)) {
    ?>
        <h1 class="fs-3">I due file sono uguali!</h1>
    <?php
    } else {
        ?>
        <h1 class="fs-3">I due file NON sono uguali!</h1>
        <?php
    }
} else {

    ?>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1 class="display-5 text-center my-5">Comparatore file con criptazione Hash</h1>
                    <form class="my-5" method="POST" action="/index.php" target="_blank" enctype="multipart/form-data">
                        <input class="form-control mb-3" name="f1" type="file">
                        <input class="form-control mb-3" name="f2" type="file">
                        <div class="d-flex justify-content-end align-items-center">
                            <button class="btn btn-success" type="submit">Compara!</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>
<?php
}
?>