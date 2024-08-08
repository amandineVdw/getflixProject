<header class="container mx-auto w-full h-[110px]">
    <nav class="h-full w-full">
      <ul class="list-none h-full flex justify-between items-center">
        <article class="flex">
          <img src="image/GETFLIX_logo.svg" alt="GetFlix Logo" class="mr-[73px]">
          <li><a href="index.php" class="mr-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'text-pastelBlue' : 'text-white'; ?>">Home</a></li>
          <li><a href="category.php?movies" class="mr-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'category.php' && isset($_GET['movies'])) ? 'text-pastelBlue' : 'text-white'; ?>">Movie</a></li>
          <li><a href="category.php?series" class="mr-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'category.php' && isset($_GET['series'])) ? 'text-pastelBlue' : 'text-white'; ?>">Tv Shows</a></li>
          <a href="category.php?country"><button id="dropdownHoverButton1" data-dropdown-toggle="dropdownHover1" data-dropdown-trigger="hover" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'category.php' && isset($_GET['country'])) ? 'text-pastelBlue' : 'text-white'; ?> focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-xl mr-4 inline-flex items-center leading-none h-[20px]" type="button">Country<svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"></path>
          </svg>
          </button></a>
          <div id="dropdownHover1" class="z-10 bg-greyWhite divide-y divide-gray-100 rounded-xl shadow w-fit hidden px-2">
            <article class="flex">
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton1">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Argentina</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Australia</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Austria</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Belgium</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Brazil</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Canada</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">China</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Czech Republic</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Denmark</a>
                </li>
              </ul>
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton1">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Finland</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">France</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Germany</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Hong Kong</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Hungary</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">India</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Ireland</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Israel</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Italy</a>
                </li>
              </ul>
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton1">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Japan</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Luxembourg</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Mexico</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Netherlands</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">New Zealand</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Norway</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Poland</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Romania</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Russia</a>
                </li>
              </ul>
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton1">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">South Africa</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">South Korea</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Spain</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Sweden</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Switzerland</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Taiwan</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">Thailand</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">United Kingdom</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-300 hover:px-4 hover:py-2 rounded-xl">USA</a>
                </li>
              </ul>
            </article>
          </div>
          <li><a href="category.php?language" class="mr-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'category.php' && isset($_GET['language'])) ? 'text-pastelBlue' : 'text-white'; ?>">Browse by language</a></li>
        </article>
        <article class="flex">        
          <img src="image/Search_Icon.svg" alt="Search Icon" class="mr-4">
          <img src="image/avatar-01.png" alt="avatar users" class="mr-2.5">
          <img src="image/icon_arrow-down.svg" alt="arrow down">
        </article>
      </ul>
    </nav>
  </header>