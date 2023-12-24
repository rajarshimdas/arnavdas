<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">

</head>

<body>
    <div style="max-width: 400px;margin:auto;">
        <h1 style="font-family: Skranji;">Friends List</h1>

        <div>
            Add Friend: <a class="button" href='friend-add.html'><img src="images/addbox.png"></a>
        </div>

        <ol>
            <?php
            // 1. Connect to database
            $db = new SQLite3('friends.db');

            // 2. Query statement
            $sql = 'SELECT * FROM friends';

            // 3. Fetch results from database
            $results = $db->query($sql);

            // 4. Display data
            while ($row = $results->fetchArray()) {
                // var_dump($row);
                echo '<li>' . $row['fname'] . ' ' . $row['lname'] . '</li>';
            }
            ?>
        </ol>

    </div>
</body>

</html>