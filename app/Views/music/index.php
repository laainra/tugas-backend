<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Play List</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Movie Watch List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/music">Playlist Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/music/create">Add Music</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Tambahkan konten utama di sini -->
    <div class="container">
        <h2>Playlist Music</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Singer</th>
                    <th>Album</th>
                    <th>Length</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr> <?php $i = 1;
                        foreach ($musics as $music) : ?>
                        <td><?= $i++ ?></td>
                        <td><?= $music->title ?></td>
                        <td><?= $music->singer ?></td>
                        <td><?= $music->album ?></td>
                        <td><?= $music->length ?></td>

                        <td>
                            <a href=<?= "/music/edit/" . $music->id ?>>
                                <button class="btn btn-warning btn-sm">Edit</button>

                            </a>

                            <a href=<?= "/music/delete/" . $music->id ?>>
                                <button class="btn btn-danger btn-sm">Delete</button>

                            </a>
                        </td>
                    

                </tr>
                <!-- Tambahkan baris-baris tambahan di sini jika diperlukan -->
            </tbody>
            <?php endforeach ?>
        </table>
        <a href="/music/create">

            <button class="btn btn-primary">Add Music</button>
        </a>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap di sini -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>