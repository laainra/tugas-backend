<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('edit-product/'.$product->id)?>" method="POST" >
        <label for="nama_product">Nama Product</label>
        <input name="nama_product" type="text" value="<?= $product->nama_product ?>" id="nama_product">
        <label for="description">Deskripsi Product</label>
        <input name="description" type="text" value="<?= $product->description ?>" id="description">
        <button type="submit">Update</button>
    </form>
</body>
</html>
