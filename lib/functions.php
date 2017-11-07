<?php

function get_posts( $json) {
  $json = file_get_contents( $json );
  $posts = json_decode( $json, true);

  return $posts;
}




// include './data/posts.json';

  // "true" makes it an associative array
 

