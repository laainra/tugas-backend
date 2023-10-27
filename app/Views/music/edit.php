<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Music</title>
    <!-- Tambahkan link CSS Bootstrap di sini jika diperlukan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Edit Music</h2>
    <form id="musicForm" action="/music/update/ <?= $music->id ?>" method="post">
        <div class="form-row">
            <div class="col">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" required value="<?= $music->title ?>">
            </div>
            <div class="col">
                <label for="singer">Singer</label>
                <input type="text" class="form-control" name="singer" required value="<?= $music->singer ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="album">Album</label>
                <input type="text" class="form-control" name="album" required value="<?= $music->album ?>">
            </div>
            <div class="col">
                <label for="length">Length</label>
                <input type="text" class="form-control" name="length" required value="<?= $music->length ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Music</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
