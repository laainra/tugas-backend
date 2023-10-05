<?= $this->extend('movie/app') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Movie Watch List</h2>
    <a href="/movie/create" class="btn btn-primary mb-3">Tambah Film</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Total Episode</th>
                <th>Episode Watched</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= $movie['title'] ?></td>
                    <td><?= $movie['total_episode'] ?></td>
                    <td><?= $movie['episode_watched'] ?></td>
                    <td><?= $movie['status'] ?></td>
                    <td>
                        <a href="/movie/edit/<?= $movie['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/movie/delete/<?= $movie['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
