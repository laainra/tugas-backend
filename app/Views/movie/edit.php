<?= $this->extend('movie/app') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Edit Film</h2>
    <form action="/movie/update/<?= $movie['id'] ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $movie['title'] ?>">
        </div>
        <div class="form-group">
            <label for="total_episode">Total Episode</label>
            <input type="number" class="form-control" id="total_episode" name="total_episode" value="<?= $movie['total_episode'] ?>">
        </div>
        <div class="form-group">
            <label for="episode_watched">Episode Watched</label>
            <input type="number" class="form-control" id="episode_watched" name="episode_watched" value="<?= $movie['episode_watched'] ?>">
        </div>
        <div class="form-group">
            <label>Status</label><br>
            <input type="radio" id="watching" name="status" value="Watching" <?= $movie['status'] === 'Watching' ? 'checked' : '' ?>>
            <label for="watching">Watching</label><br>
            <input type="radio" id="finished" name="status" value="Finished" <?= $movie['status'] === 'Finished' ? 'checked' : '' ?>>
            <label for="finished">Finished</label><br>
            <input type="radio" id="plan_to_watch" name="status" value="Plan to Watch" <?= $movie['status'] === 'Plan to Watch' ? 'checked' : '' ?>>
            <label for="plan_to_watch">Plan to Watch</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
