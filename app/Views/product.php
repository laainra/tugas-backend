<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DView Product</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <button > <a href="/insertproduct"> Tambah Product</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->id; ?></td>
                <td><?php echo $product->nama_product; ?></td>
                <td><?php echo $product->description; ?></td>
                <td>
                    <a href="<?= base_url("/edit-product/") . $product->id?>">Edit</a>
                    <a href="<?= base_url("/delete-product/") . $product->id?>">Delete</a>
            </td>
                <td></td>            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
