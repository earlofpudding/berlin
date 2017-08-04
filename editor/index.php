<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Submit Content</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./css/simplemde.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
</head>

<body>

<div id="wrap">
    <h1>Submit Content</h1>

    <form method="post" action="submit.php">
        <input id="post-title" type="text" name="title" placeholder="Title of Submission...." />

        <textarea name="content"></textarea>

        <div style="text-align: center;"><input id="submit-buttom" type="submit" value="Submit Post!" /></div>
    </form>
</div>

<script type="text/javascript" src="./js/simplemde.min.js"></script>
<script>
    var simplemde = new SimpleMDE();
</script>
</body>
</html>