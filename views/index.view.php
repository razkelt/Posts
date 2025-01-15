<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/posts">Posts</a>      &nbsp; <a href="/logout">Logout</a>  &nbsp; <a href="/login">Login</a>
    <h1>Write here.</h1>
    <div>
        <form action="/store" method="POST">
        <div>
            <input name="title" id="title" value=<?= 
        
        ($post['title']) ?? '' 
        
        ?>>
        </div>
        <div>
        <textarea name="body" id="body"><?= 
        
        ($post['body']) ?? '' 
        
        ?></textarea>
        <select name="folder">
            <option selected="selected">Post</option>
            <option>Note</option>
        </select>
        <button>Submit</button>
        </div>
        </form>
    </div>

</body>
</html>