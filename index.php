<?php

require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="css/style.css">

   <title>Dischi php</title>
</head>

<body>
   <div id="app">
      <!-- header -->
      <header >
         <div class="container-fluid d-flex justify-content-between">
            <div class="logo-img">
               <img src="./img/logo.png" alt="">
            </div>

            <!-- <select>
               <option value="Tutti">Tutti</option>
               <option value="Rock">Rock</option>
               <option value="Pop">Pop</option>
               <option value="Jazz">Jazz</option>
               <option value="Metal">Metal</option>
            </select> -->

            <select 
               @change="getApi()"
               class="form-select w-25"
               id="genre"
               v-model="genre"
            >
               <option value="" selected>Tutti i generi</option>
               <option 
                  v-for="genre in getGenre()"
                  :value="genre"
               >
                  {{genre}}
               </option>
            </select>
         </div>
      </header>

      <!-- main -->
      <main>
         <div class="container">
            <div class="row">
               <!-- disco singolo -->
               <?php foreach($albums as $album) {?>
               <div class="text-center mb-5 py-3 gs-album">
                  <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                  <h4 class="text-uppercase font-weight-bold my-2"><?php echo $album['title'] ?></h4>
                  <p class="m-0"><?php echo $album['author'] ?></p>
                  <p class="m-0"><?php echo $album['year'] ?></p>
              </div>
              <?php } ?> 

            </div>  
         </div>
          
      </main>
      
      
   </div>

   <!-- vue -->
   <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
   <!-- axios -->
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <!-- mio js -->
   <script src="vue.js"></script>
</body>
</html>