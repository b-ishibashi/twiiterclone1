<!DOCTYPE html>
<html>
    <head>
        <title>Talks</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <ul>
                <li><a href="index.php">Talks</a></li>
                <li><a href="">聞く</a></li>
                <li><a href="contribution.php">話す</a></li>
            </ul>
        </header>
        <article>
            <h1>会話一覧</h1>
            <? foreach ($comments as $comment): ?>
                <li><?=$comment?></li>
            <? endforeach; ?>
        </article>
    </body>
</html>