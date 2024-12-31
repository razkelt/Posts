<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
    <a href="/posts">Posts</a>
</nav>
<body>
    <h1>Make a Post</h1>
    <div>
        <form action="/store" method="POST">
        <div>
            <input name="title" id="title" value=<?= 
        
        ($post['title']) ?? '' 
        
        ?>>
        </div>
        <div>
        <textarea name="post" id="post"><?= 
        
        ($post['body']) ?? '' 
        
        ?></textarea>
        <button for="post">Submit</button>
        </div>
        </form>
    </div>

</body>
</html>