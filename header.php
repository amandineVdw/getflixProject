<header class="container mx-auto w-full h-[110px]">
    <nav class="h-full w-full">
      <ul class="list-none h-full flex justify-between items-center">
        <article class="flex">
          <img src="image/GETFLIX_logo.svg" alt="GetFlix Logo" class="mr-[73px]">
          <li><a href="index.php" class="mr-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'text-pastelBlue' : 'text-white'; ?>">Home</a></li>
          <li><a href="category.php" class="mr-4 <?= basename($_SERVER['PHP_SELF']) == 'category.php' ? 'text-pastelBlue' : 'text-white' ?>">Genre</a></li>
          <li><a href="category.php" class="mr-4 <?= basename($_SERVER['PHP_SELF']) == 'category.php' ? 'text-pastelBlue' : 'text-white' ?>">Country</a></li>
          <li><a href="category.php" class="mr-4 <?= basename($_SERVER['PHP_SELF']) == 'category.php' ? 'text-pastelBlue' : 'text-white' ?>">Browse by language</a></li>
        </article>
        <article class="flex">        
          <img src="image/Search_Icon.svg" alt="Search Icon" class="mr-4">
          <img src="image/avatar-01.png" alt="avatar users" class="mr-2.5">
          <img src="image/icon_arrow-down.svg" alt="arrow down">
        </article>
      </ul>
    </nav>
  </header>