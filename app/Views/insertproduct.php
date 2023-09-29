<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Product</title>
</head>
<body>
    <h1>Insert Product</h1>
    <form action="<?= base_url('insertproduct') ?>" method="POST">
    <?php echo csrf_field(); ?>
        <label for="nama_product">Nama Product</label>
        <input name="nama_product" type="text" id="nama_product" required>
        <label for="description">Deskripsi Product</label>
        <input name="description" type="text" id="description" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
