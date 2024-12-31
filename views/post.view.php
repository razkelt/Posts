<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
    <a href="/">Go Back</a>
</nav>
<body>
    <h1>
        <?= $post['title'] ?>   
    </h1>
    <h2>
        <?= $post['body'] ?>
    </h2>
    <div>
    <form name="delete" id="delete" action="/delete?id=<?=$post['id']?>" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <button for="delete">Delete</button>
    </form>
    </div>
    <p></p>
    <div>
    <form name="edit" id="edit" action="/edit?id=<?=$post['id']?>" method="POST">
        <button for="edit">Edit</button>
    </form>
    </div>
</body>
</html>