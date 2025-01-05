<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/posts">Posts</a>
    <h1>Here</h1>
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