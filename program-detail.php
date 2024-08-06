<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Program</title>
  </head>
  <body class="bg-halfBlack h-screen w-screen">
    <?php include_once("./header.php");?>
    <main class="container mx-auto w-full h-[801px] flex mb-14">
      <div class="bg-gray-500 rounded-xl h-full w-[679px] mr-14" name="img-cat_08"></div>
      <section class="h-full grow flex flex-col justify-between">
        <article>
        <h1 name="name-prog" class="bg-pastelBlue text-white py-4 pl-4 text-[34px] text-1 font-[570] uppercase mb-6 rounded-[10px] leading-none">SILO</h1>
          <section class="info flex items-center mb-6">
            <button name="genre-01" class="bg-white p-[10px] text-base font-[570] leading-none mr-2 rounded-[10px]">Genre</button>
            <button name="genre-02" class="bg-white p-[10px] text-base font-[570] leading-none mr-2 rounded-[10px]">Genre</button>
            <p name="year" class="font-[570] text-base text-white mr-2">year</p>
            <p name="duration" class="font-[570] text-base text-white mr-2">duration</p>
            <p name="imbdb-note" class="font-[570] text-base text-white">0.0</p>
          </section>
          <section class="flex">
            <ul class="list-none mr-6">
              <li class="text-white text-xs mb-[10px]">Country : <span name="prog-country">United States</span></li>
              <li class="text-white text-xs">Production : <span name="prog-prod">AMC Studios</span></li>
            </ul>
            <ul class="list-none">
              <li class="text-white text-xs mb-[10px]">Date Release : <span name="prog-release">May 05 2023</span></li>
              <li class="text-white text-xs w-[370px]">Cast : <span name="prog-cast">Tim Robbins, Rebecca Ferguson, Avi Nash, Rashida Jones, David Oyewolo, Tim Robbins</span></li>
            </ul>
          </section>
        </article>
        <article class="w-[789px]">
          <p class="text-white font-[570] text-[18px]">In a future where the Earth has been devastated and the air has become toxic, the survivors live in a giant 144-storey underground silo. Within this community, individuals must abide by a series of strict rules designed to protect them. Citizens who break the law are sent outside the silo, condemned to die in the unbreathable atmosphere. Gradually, however, the idea that those in charge are lying about what's going on outside is gaining ground...</p>
        </article>
      </section>

    </main>
    <?php include_once("./footer.php");?>
  </body>
</html>