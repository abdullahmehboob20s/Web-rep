<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      <?php include('dist/output.css'); ?> 
      <?php include('styles/main.css'); ?> 
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Crushr</title>
  </head>
  <body class="attr-page-settings attr-current-plan-free">

  <!-- <?php include('_demo-files/_demo_box.php');?> -->

  <div class="page-wrapper">

    <div class="page-inner">


          <header class="hd">
            <h1 class="display">Settings</h1>
          </header>


      <section class="cnt-help box-css">

        <div class="article setting-content-wrapper">




            <div class="py-6 setting-content-wrapper">
              <div class="setting-content-wrapper">

                

                <div class="flex items-center justify-between">
                  <div class="flex flex-col">
                    <h2 class="display">Automatic Mode</h2>
<p class="mt-4 sm:mt-3 setting-subtitle">We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to hear from you! Send us a message using the form opposite, or email us.</p>
                  </div>
                  <button type="button" class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 bg-sky-500" role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-sky-500': on, 'bg-gray-200': !(on) }" aria-labelledby="privacy-option-3-label" aria-describedby="privacy-option-3-description" :aria-checked="on.toString()" @click="on = !on">
                          <span aria-hidden="true" class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                  </button>
                </div>

              </div>
            </div>




            <div class="py-6 setting-content-wrapper">
              <div class="setting-content-wrapper">

                

                <div class="items-center justify-between">
                  <div class="pb-4">
                    <h2 class="display">Restore Images</h2>
<p class="mt-4 sm:mt-3 setting-subtitle">We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to hear from you! Send us a message using the form opposite, or email us.</p>
                  </div>
                  <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
  <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
  </svg>
                  Restore Images</button>

                </div>

              </div>
            </div>



            <div class="py-6">
              <div class=" divide-y divide-gray-100">

                <h2 class="display">Email Notifications</h2>

                <div class="py-4 flex items-center">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"   checked>
                      </div>
                  <div class="flex flex-col ml-4">
                    <h2 class="text-lg leading-6 setting-checkbox-title">Marketing</h2>
                    <p class="mt-1 text-sm text-gray-500">Receive the latest news, updates </p>
                  </div>

                </div>

              <div>

                <div class="pt-4 flex items-center">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"   checked>
                      </div>
                  <div class="flex flex-col ml-4">
                    <h2 class="text-lg leading-6 setting-checkbox-title">Notifications</h2>
                    <p class="mt-1 text-sm text-gray-500">Get status updates from Crushr when quota is about to be reached, warnings</p>
                  </div>

                </div>


                <ul role="list" class="mt-4 ml-8 setting-content-wrapper">
                  <li class="py-3 flex items-center justify-between">
                    <div class="relative flex items-start">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"   checked>
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="font-medium text-gray-700">Quota Warning</label>
                        <p id="offers-description" class="text-gray-500">Get notified the usage quota is about to be reached.</p>
                      </div>
                  </li>
                  <li class="py-3 flex items-center justify-between">
                    <div class="relative flex items-start">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"  checked>
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="setting-checkbox-title">Quota Reached</label>
                        <p id="offers-description" class="text-gray-500">Get notified when the usage quota is reached.</p>
                      </div>
                  </li>
                  <li class="py-3 flex items-center justify-between">
                    <div class="relative flex items-start">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"  checked>
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="setting-checkbox-title">Images Restored</label>
                        <p id="offers-description" class="text-gray-500">Lorem ipsum dolor sed neque rutrum.</p>
                      </div>
                  </li>
                  <li class="py-3 flex items-center justify-between">
                    <div class="relative flex items-start">
                      <div class="setting-checkbox">
                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox"/> 
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="setting-checkbox-title">Images Optimized</label>
                        <p id="offers-description" class="text-gray-500">Aenean auctor est sed neque rutrum, laoreet finibus metus.</p>
                      </div>
                  </li>
                </ul>
              </div>

            </div>





              </div>

        <!-- Plan -->

              <div class="py-6 space-y-6">
                <div>
                  <h2 id="plan-heading" class="text-lg leading-6 setting-checkbox-title">Plan</h2>
                </div>

                <fieldset>
                  <legend class="sr-only">Pricing plans</legend>
                  <div class="relative bg-white rounded-md -space-y-px">
                    <!-- Checked: "bg-orange-50 border-orange-200 z-10", Not Checked: "border-gray-200" -->
                    <label class="rounded-tl-md rounded-tr-md bg-sky-50 border-sky-200 setting-plan-table">
                      <span class="setting-table-column1">
                        <input type="radio" name="pricing-plan" value="Startup" class="setting-table-checkbox" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                        <span id="pricing-plans-0-label" class="setting-plan-type">Basic</span>
                      </span>
                      <span id="pricing-plans-0-description-0" class="setting-plan-duration">
                        <!-- Checked: "text-orange-900", Not Checked: "text-gray-900" -->
                        <span class="font-medium">$4.99 / mo</span>
                        <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                        
                      </span>
                      <span class="setting-plan-duration">30-day Backup</span>
                      <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                      <span id="pricing-plans-0-description-1" class="setting-plan-images">1,000 Images / mo</span>
                    </label>

                    <!-- Checked: "bg-orange-50 border-orange-200 z-10", Not Checked: "border-gray-200" -->
                    <label class="setting-plan-table">
                      <span class="setting-table-column1">
                        <input type="radio" name="pricing-plan" value="Business" class="setting-table-checkbox" aria-labelledby="pricing-plans-1-label" aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                        <span id="pricing-plans-1-label" class="setting-plan-type">Professional</span>
                      </span>
                      <span id="pricing-plans-1-description-0" class="setting-plan-duration">
                        <!-- Checked: "text-orange-900", Not Checked: "text-gray-900" -->
                        <span class="font-medium">$9.99 / mo</span>
                        <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                        
                      </span>
                      <span class="setting-plan-duration">60-day Backup</span>
                      <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                      <span id="pricing-plans-1-description-1" class="setting-plan-images">2,000 Images / mo</span>
                    </label>

                    <!-- Checked: "bg-orange-50 border-orange-200 z-10", Not Checked: "border-gray-200" -->
                    <label class="rounded-bl-md rounded-br-md setting-plan-table">
                      <span class="setting-table-column1">
                        <input type="radio" name="pricing-plan" value="Enterprise" class="setting-table-checkbox" aria-labelledby="pricing-plans-2-label" aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                        <span id="pricing-plans-2-label" class="setting-plan-type">Premium</span>
                      </span>
                      <span id="pricing-plans-2-description-0" class="setting-plan-duration">
                        <!-- Checked: "text-orange-900", Not Checked: "text-gray-900" -->
                        <span class="font-medium">$19.99 / mo</span>
                        <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                        
                      </span>
                      <span class="setting-plan-duration">90-day Backup</span>
                      <!-- Checked: "text-orange-700", Not Checked: "text-gray-500" -->
                      <span id="pricing-plans-2-description-1" class="setting-plan-images">3,000 Images / mo</span>
                    </label>
                  </div>
                </fieldset>













            </div>

              <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="button" class="setting-cancel-btn">Cancel</button>
                <button type="submit" class="ml-5 bg-sky-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">Save</button>
              </div>
              




        </div>



  <!-- This example requires Tailwind CSS v2.0+ -->
  <aside class="sidebar pt-8 pl-6 pr-6 pb-8 overflow-y-auto bg-slate-50">
    <?php include('element_settings_sidebar.php'); ?>
  </aside>






      </section>


      <footer></footer>


</div>

</div> <!-- page-wrapper -->

  <script>
    <?php include('js_dropdown.js'); ?>
  </script>

</body>
</html>



  