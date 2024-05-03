<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Avito</title>
    </head>
    <body>
    <form action= "../save.php" method= "post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <?php
            $categories = scandir('./categories');
            foreach ($categories as $value) {
                if ($value != '.' and $value != '..')
                {
                    echo "<option value=\"$value\">$value</option>";
                }
            }
            ?>
            <option value="cars">Cars</option>
            <option value="other">Other</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="1" cols="25" name="description"></textarea>

        <input type="submit" value="Save">
    </form>
    </body>
    </html>
</doctype>
