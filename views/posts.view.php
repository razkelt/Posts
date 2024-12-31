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
    <div>
        <?php foreach ($posts as $post) : ?>
            <li><a href='/post?id=<?=$post['id']?>'><?= $post['title'] ?></a></li>
        <?php endforeach ; ?>    
    </div>
    </h1>

        
</body>
</html>