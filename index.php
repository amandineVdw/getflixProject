<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.js" integrity="sha512-bkge924rHvzs8HYzPSjoL47QZU0PYng6QsMuo3xxmEtCeGsfIeDl6t4ATj+NxwUbwOEYKsGO8A5zIAkMXP+cHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Getflix</title>
  </head>
  <body class="bg-halfBlack h-screen w-screen">
    <?php include_once("./header.php");?>
    <main class="container mx-auto w-full h-fit">
      <section class="hero w-full h-[691px] flex items-center my-[55px]">
        <article class="w-full flex justify-between">
          <img src="image/Chernobyles.jpg" alt="Chernobyles" name="img-hero_01" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/BohemianRhapsody-Crop.png" alt="Bohemian-Rhapsody" name="img-hero_02" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/SISU.jpg" alt="SISU" name="img-hero_03" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/NightAgent-Crop.png" alt="Night_Agent" name="img-hero_04" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/DropOfGod-Crop.png" alt="DropOfGod" name="img-hero_05" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/Avatar_2-Crop.png" alt="Avatar_2" name="img-hero_06" class="object-cover h-[652px] w-[190px] rounded-xl">
          <img src="image/Lucky.png" alt="Lucky" name="img-hero_07" class="object-cover h-[652px] w-[190px] rounded-xl">
        </article>
      </section>
      <section class="cate-main w-full h-fit overflow-x-scroll mb-14"> 
        <article class="grid1 h-full space-y-6">
            <div class="grid-item grid-item--width2 bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mt-6">
              <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Movie<br>Top 10</h1>
              <a href="category.php?movies" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end"></a> 
            </div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-3">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-1">2</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-2">3</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-3">4</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-3">5</div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-4">6</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">7</div>
            <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-5">8</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">9</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">10</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">11</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">13</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">14</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">15</div>
        </article>
      </section>
      <section class="cate-main w-full h-fit overflow-x-scroll mb-14"> 
        <article class="grid1 h-full space-y-6">
            <div class="grid-item grid-item--width2 bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mt-6">
              <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Tv Shows Top 10</h1>
              <a href="category.php?series" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end"></a> 
            </div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-3">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-1">2</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-2">3</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-3">4</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-3">5</div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-4">6</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">7</div>
            <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-5">8</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">9</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">10</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">11</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">13</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">14</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">15</div>
        </article>
      </section>
      <section class="cate-main w-full h-fit overflow-x-scroll mb-14 p-0"> 
        <article class="grid1 h-full space-y-6">
            <div class="grid-item grid-item--width2 bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mt-6">
              <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Discover Movies</h1>
              <a href="category.php?movies" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end"></a> 
            </div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-3">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-1">2</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-2">3</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-3">4</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-3">5</div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-4">6</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">7</div>
            <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-5">8</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">9</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">10</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">11</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">13</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">14</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">15</div>
        </article>
      </section>
      <section class="cate-main w-full h-fit overflow-x-scroll mb-14"> 
        <article class="grid1 h-full space-y-6">
            <div class="grid-item grid-item--width2 bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mt-6">
              <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Discover TV Shows</h1>
              <a href="category.php?series" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end"></a> 
            </div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-3">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-1">2</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-2">3</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-3">4</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-3">5</div>
            <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-4">6</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">7</div>
            <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-5">8</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">9</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">10</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">11</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">1</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">13</div>
            <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-5">14</div>
            <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">15</div>
        </article>
      </section>
    <?php include_once("./footer.php");?>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <!-- <script src="./masonry.pkgd.js"></script> -->
  </body>
</html>