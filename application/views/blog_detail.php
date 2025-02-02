<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>
    <style>
        .blog {
            margin: 20px auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #4CAF50;
        }
        .blog h2 {
            margin-top: 0;
        }
        .blog p {
            text-align: justify;
        }
    </style>
</head>
<body>

    <h1 class="blog">Blog Detail</h1>

    <div class="blog">
        <h2><?php echo $blog['id'] ?></h2>
        <h2><?php echo $blog['title'] ?></h2>
        <p><?php echo $blog['content'] ?></p>
        <p>URL: <?php echo $blog['url'] ?></p>
        <p>Cover: <?php echo $blog['cover'] ?></p>
        <p>Data: <?php echo $blog['data'] ?></p>
    </div>
    
</body>
</html>