<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            line-height: 1.6;
            color: #666;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .blog {
            margin-bottom: 20px;
        }
        .blog h2 {
            font-size: 24px;
            margin-top: 0;
        }
        .blog p {
            margin-bottom: 10px;
        }
        .blog a {
            font-weight: bold;
        }
        .blog a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="blog">Blog</h1>

        <?php foreach($blogs as $key=>$blog):?>
            <div class="blog">
                <h2>
                    <a href="<?php echo site_url('Blog/detail/' . $blog['url']); ?>">
                        <?php echo $blog['title'];?>
                    </a>
                </h2>
                <?php echo $blog['content'];?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>