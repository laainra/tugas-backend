<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Store</title>
    <style>
        /* Style for the form container */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style for the form fields */
        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Style for the submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Style for success and error messages */
        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Store</h1>

        <form method="post" action="<?= base_url('edit-store/'.$store->id)?>">
            <?php echo csrf_field(); ?>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="<?= $store->name ?>"><br>
            <label for="description">Description:</label>
            <input id="description" name="description" required value="<?= $store->description ?>"></input><br>
            <input type="submit" value="Edit Store">
        </form>
        <a href="/store">Back to Store List</a>
    </div>
</body>
</html>

