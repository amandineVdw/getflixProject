<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
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
      <!-- <section class="scroller w-full mt-12 mb-28">
        <article class="w-full grid grid-rows-2 grid-flow-col auto-cols-min overflow-x-auto gap-6">
          <div class="h-[388px] w-[388px] bg-pastelBlue rounded-xl p-4 flex flex-col justify-between">
            <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Action</h1>
            <img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end">
          </div>
          <div class="bg-gray-500 h-[388px] w-[388px] rounded-xl" name="img-cat-3">0.1</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-1">1</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-2">2</div>
          <div class="bg-gray-500 h-[388px] w-[388px] rounded-xl" name="img-cat-3">3</div>
          <div class="bg-gray-500 h-[388px] w-[388px] rounded-xl" name="img-cat-3">4</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-4">5</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-5">6</div>
          <div class="bg-gray-500 h-[388px] w-[388px] rounded-xl" name="img-cat-6">7</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-7">8</div>
          <div class="bg-gray-500 h-[388px] w-[288.74px] rounded-xl" name="img-cat-8">9</div>
        </article>
      </section> -->
      <section class="w-full mb-14">
        <article class="w-full h-fit flex space-x-6 overflow-x-scroll">
          <div class="h-[388px] w-[388px] bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mb-6">
            <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Adventure</h1>
            <a href="#" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px]"></a>
          </div>
          <img src=" http://image.tmdb.org/t/p/w500/vpnVM9B6NMmQpWeZvzLvDESb2QY.jpg" class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl mb-6 ml-6"></img>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-3">3</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[388px] rounded-xl" name="img-cat-3">4</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-3">5</div>
        </article>
        <article class="flex flex-nowrap space-x-6 overflow-x-auto">
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-4">5</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-5">6</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[388px] rounded-xl" name="img-cat-6">7</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-7">8</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-8">9</div>
          <div class="bg-gray-500 shrink-0 h-[388px] w-[288.74px] rounded-xl" name="img-cat-8">9</div>
        </article>
      </section>
      <section class="w-full mb-14">
        <article class="grid1 w-full h-fit space-y-6  overflow-x-auto">
          <div class="grid-item grid-item--width2 bg-pastelBlue rounded-xl p-4 flex flex-col justify-between mt-6">
            <h1 name="category-01" class="text-white text-[56px] font-[570] uppercase break-words">Action</h1>
            <a href="#" class="self-end"><img src="image/Arrow-Categorie.svg" alt="Arrow-Categorie" class="w-[72px] h-[72px] self-end"></a> 
          </div>
          <div class="grid-item  bg-gray-500 rounded-xl ml-6" name="img-cat-3">0.1</div>
          <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-1">1</div>
          <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-2">2</div>
          <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl" name="img-cat-3">3</div>
          <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-3">4</div>
          <div class="grid-item grid-item--width2 bg-gray-500 rounded-xl ml-6" name="img-cat-4">5</div>
          <div class="grid-item bg-gray-500 rounded-xl ml-6" name="img-cat-5">6</div>
          <!-- <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-6">7</div>
          <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-7">8</div>
          <div class="grid-item bg-gray-500 rounded-xl" name="img-cat-8">9</div> -->
        </article>
      </section>
    <?php include_once("./footer.php");?>
    <script src="./masonry.pkgd.js"></script>
  </body>
</html>