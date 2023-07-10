<?php

include 'includes/database.php';

  echo "You are connected <br>";

  if(is_numeric($_GET['id'])&& isset($_GET['id'])){

  $sql = "SELECT * FROM article WHERE id = " . $_GET['id'];

  $results = mysqli_query($conn, $sql);

  if($results === false){
    echo mysqli_error($conn);
  } else {
    $article = mysqli_fetch_assoc($results);
  } 
}else {
  $article = null;
}
?>

<?php require 'includes/header.php'; ?>
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
<?php require 'includes/footer.php'; ?>