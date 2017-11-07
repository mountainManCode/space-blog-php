<?php 
include './lib/functions.php';
include './templates/header.php'; 
?>
<section class="wrapper">
  <?php include './templates/sidebar.php'; ?>
<article class='blog_posts'>
<?php
$posts = get_posts('./data/posts.json');

//var_dump ($posts);

foreach ( $posts as $post ):
  echo '<h2>' . $post['title'] . '</h2>';
  echo date("F j, Y", $post['post_date']);
  echo '<p>' . $post['author'] . '</p>';
  echo '<p>' . $post['content'] . '</p>';
  echo '<p>' . '<strong>' . 'Categorized in: ' . '</strong>' . ucwords(implode(', ', $post['category']));
  
  endforeach;
?>
</article>
</section>
<?php include './templates/footer.php';


// <body>
// include '.templates/sidebar.php'; 

// <article>
 
// </article>
// </body>

// </html>

// usort($posts, function ($a, $b)){

// }