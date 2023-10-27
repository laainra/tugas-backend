<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Music to Playlist</title>
    <!-- Tambahkan link CSS Bootstrap di sini jika diperlukan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Add Music to Playlist</h2>
        <form id="musicForm" action="/music/store" method="post">
            <div class="form-row">
                <div class="col">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="col">
                    <label for="singer">Singer</label>
                    <input type="text" class="form-control" name="singer" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="album">Album</label>
                    <input type="text" class="form-control" name="album" required>
                </div>
                <div class="col">
                    <label for="length">Length</label>
                    <input type="text" class="form-control" name="length" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Music</button>
        </form>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap di sini jika diperlukan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
