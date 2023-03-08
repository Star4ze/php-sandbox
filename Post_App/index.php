<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Post App</title>
</head>

<body>
    <header>
        <h1>Post App</h1>
        <hr>
    </header>
    <form action="/crudPost.php" method="POST">
        <div>
            <label for="title">Enter Title :</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">Content :</label>
            <textarea name="content" cols="22"></textarea>
        </div>
        <input type="submit" value="Add">
    </form>
    <a href="./posts.php">Show Post</a>
</body>

</html>