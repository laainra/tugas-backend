<?= $this->extend('movie/app') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Tambah Film</h2>
    <form action="/movie/store" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            <?php if (isset($validation) && $validation->hasError('title')): ?>
                <span class="text-danger"><?= $validation->getError('title') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="total_episode">Total Episode</label>
            <input type="number" class="form-control" id="total_episode" name="total_episode">
            <?php if (isset($validation) && $validation->hasError('total_episode')): ?>
                <span class="text-danger"><?= $validation->getError('total_episode') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="episode_watched">Episode Watched</label>
            <input type="number" class="form-control" id="episode_watched" name="episode_watched">
            <?php if (isset($validation) && $validation->hasError('episode_watched')): ?>
                <span class="text-danger"><?= $validation->getError('episode_watched') ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Status</label><br>
            <input type="radio" id="plan_to_watch" name="status" value="Plan to Watch">
            <label for="plan_to_watch">Plan to Watch</label>
            <input type="radio" id="watching" name="status" value="Watching">
            <label for="watching">Watching</label><br>
            <input type="radio" id="finished" name="status" value="Finished">
            <label for="finished">Finished</label>
            <?php if (isset($validation) && $validation->hasError('status')): ?>
                <span class="text-danger"><?= $validation->getError('status') ?></span>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
