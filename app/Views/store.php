<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store List</title>
    <style>
        /* Style for the heading */
        h1 {
            text-align: center;
            color: #007bff;
        }

        /* Style for the table */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Style for table headings */
        th {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        /* Style for table rows */
        tr {
            border-bottom: 1px solid #ccc;
        }

        /* Style for table data cells */
        td {
            padding: 10px;
        }

        /* Style for the "Add New Store" link */
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Store List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stores as $store): ?>
                <tr>
                    <td><?php echo $store['name']; ?></td>
                    <td><?php echo $store['description']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="insertstore">Add New Store</a>
</body>
</html>
