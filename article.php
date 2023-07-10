<?php

$db_host = "localhost";
$db_name = 'cms';
$db_user = 'alexis';
$db_pass = 'V[Ixvtpj[CSC6HOX';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }
  echo "You are connected <br>";

  $sql = "SELECT * FROM article WHERE id = " . $_GET['id'];

  $results = mysqli_query($conn, $sql);

  if($results === false){
    echo mysqli_error($conn);
  } else {
    $article = mysqli_fetch_assoc($results);
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>

    <main>
        <?php if ($article === null): ?>
            <p>No articles found.</p>
        <?php else: ?>
            <ul>
                <article>
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
                </article>
            </ul>
        <?php endif; ?>
    </main>
</body>
</html>