<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="pagination">
  <div class="pagination-side-box">
    <a href="#" class="pagination-btn">
      <!-- Heroicon name: solid/arrow-narrow-left -->
      <svg class="mr-3 pagination-btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
      </svg>
      Previous
    </a>
  </div>
  <div class="pagination-pages">
    <a href="#" class="pagination-page-btn"> 1 </a>
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    <a href="#" class="pagination-page-btn active" aria-current="page"> 2 </a>
    <a href="#" class="pagination-page-btn"> 3 </a>
    <span class="pagination-page-btn dotted"> ... </span>
    <a href="#" class="pagination-page-btn"> 8 </a>
    <a href="#" class="pagination-page-btn"> 9 </a>
    <a href="#" class="pagination-page-btn"> 10 </a>
  </div>
  <div class="pagination-side-box right ">
    <a href="#" class="pagination-btn">
      Next
      <!-- Heroicon name: solid/arrow-narrow-right -->
      <svg class="ml-3 pagination-btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>
</nav>