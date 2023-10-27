
<?= $this->extend('music/app') ?>

<?= $this->section('content') ?>

<div class="container">
<h1>Trashed Music</h1>
<a href="<?= site_url('music') ?>">Back to Music List</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Singer</th>
            <th>Album</th>
            <th>Length</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($trashedMusics as $music) : ?>
            <tr>
                <td><?= $music->title ?></td>
                <td><?= $music->singer ?></td>
                <td><?= $music->album ?></td>
                <td><?= $music->length ?></td>
                <td>
                    <a class="btn btn-primary" href="<?= site_url('music/restore/' . $music->id) ?>">Restore</a>
                    <a class="btn btn-primary" href="<?= site_url('music/permanentdelete/' . $music->id) ?>">Permanent delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>
