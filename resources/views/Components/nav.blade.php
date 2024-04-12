<nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="OneForty Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">One Forty</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Get started
      </button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-sticky" style="display: none;">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li><x-nav-links href="/" :Active="request()->is('/')">Home</x-nav-links></li>
        <li><x-nav-links href="/products" :Active="request()->is('products')">Products</x-nav-links></li>
      </ul>
    </div>
  </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const button = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
  const menu = document.getElementById('navbar-sticky');

  function toggleMenu() {
    const expanded = button.getAttribute('aria-expanded') === 'true' || false;
    button.setAttribute('aria-expanded', !expanded);
    menu.style.display = expanded ? 'none' : 'block';
  }

  button.addEventListener('click', toggleMenu);

  // Check screen size and adjust menu display
  function checkScreenSize() {
    if (window.innerWidth > 768) { // Adjust the breakpoint as needed
      menu.style.display = 'block'; // Show the menu as nav menu on larger screens
      button.style.display = 'none'; // Hide the hamburger icon button
    } else {
      menu.style.display = 'none'; // Hide the menu on small screens
      button.style.display = 'inline-flex'; // Show the hamburger icon button
    }
  }

  // Initial check
  checkScreenSize();

  // Listen for window resize events
  window.addEventListener('resize', checkScreenSize);
});
</script>
