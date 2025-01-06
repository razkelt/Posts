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
        <form action="/edit?id=<?=$id?>" method="POST">
            <input type="hidden" name="_method" value="PATCH">
        <div>
        <textarea name="title" id="title" value=<?= 
        
        ($post['title']) ?? '' 
        
        ?>></textarea>
        
        </div>
        <div>
        <textarea name="body" id="body"><?= 
        
        ($post['title']) ?? '' 
        
        ?></textarea>
        </div>
        </div>
        <div>
        <textarea name="body" id="body"><?= 
        
        ($post['body']) ?? '' 
        
        ?></textarea>
        <button>Submit</button>
        </div>
        </form>
    </div>

</body>
</html>