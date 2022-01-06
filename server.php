<?php
   require_once __DIR__ . "/db.php";
   $albumsFiltered = [];
   
   if (isset($_GET['genre']) && !($_GET['genre'] === '')) {
      foreach ($albums as $album) {
         if ($album['genre'] === $_GET['genre']) {
            $albumsFiltered[] = $album;
         }
      }
   }else{
      $albumsFiltered = $albums;
   }
      
   header('Content-Type: application/json');
   echo json_encode($albumsFiltered);
?>