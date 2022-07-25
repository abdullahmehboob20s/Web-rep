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
  <body class="attr-page-help attr-current-plan-free">

  <!-- <?php include('_demo-files/_demo_box.php');?> -->

  <?php include('element_navigation.php');?>

  <div class="page-wrapper">

    <div class="page-inner">

          <header class="hd">
            <h1 class="display">Help Center</h1>
          </header>


      <section class="cnt-help box-css">

        <div class="article">

          <header class="hd">
            <h2 class="display">Contact Us</h2>
          </header>
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

        <p class="contact-subtitle">We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to hear from you! Send us a message using the form opposite, or email us.</p>
        <form action="#" method="POST" class="contact-form">
          <div>
            <label for="first-name" class="contact-label">First name</label>
            <div class="mt-1">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="contact-input">
            </div>
          </div>
          <div>
            <label for="last-name" class="contact-label">Last name</label>
            <div class="mt-1">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="contact-input">
            </div>
          </div>
          <div class="contact-input-wrapper">
            <label for="email" class="contact-label">Email</label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" class="contact-input">
            </div>
          </div>
          <div class="contact-input-wrapper">
            <label for="company" class="contact-label">Company</label>
            <div class="mt-1">
              <input type="text" name="company" id="company" autocomplete="organization" class="contact-input">
            </div>
          </div>
          <div class="contact-input-wrapper">
            <div class="flex justify-between">
              <label for="phone" class="contact-label">Phone</label>
              <span id="phone-description" class="contact-teller">Optional</span>
            </div>
            <div class="mt-1">
              <input type="text" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="contact-input">
            </div>
          </div>
          <div class="contact-input-wrapper">
            <div class="flex justify-between">
              <label for="how-can-we-help" class="contact-label">How can we help you?</label>
              <span id="how-can-we-help-description" class="contact-teller">Max. 500 characters</span>
            </div>
            <div class="mt-1">
              <textarea id="how-can-we-help" name="how-can-we-help" aria-describedby="how-can-we-help-description" rows="4" class="contact-textarea"></textarea>
            </div>
          </div>
          <fieldset class="contact-input-wrapper">
            <legend class="contact-label">Expected budget</legend>
            <div class="contact-chooser">
              <div class="flex items-center">
                <input id="budget-under-25k" name="budget" value="under_25k" type="radio" class="contact-radio">
                <label for="budget-under-25k" class="ml-3">
                  <span class="contact-radio-title">Less than $25K</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="budget-25k-50k" name="budget" value="25k-50k" type="radio" class="contact-radio">
                <label for="budget-25k-50k" class="ml-3">
                  <span class="contact-radio-title">$25K – $50K</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="budget-50k-100k" name="budget" value="50k-100k" type="radio" class="contact-radio">
                <label for="budget-50k-100k" class="ml-3">
                  <span class="contact-radio-title">$50K – $100K</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="budget-over-100k" name="budget" value="over_100k" type="radio" class="contact-radio">
                <label for="budget-over-100k" class="ml-3">
                  <span class="contact-radio-title">$100K+</span>
                </label>
              </div>
            </div>
          </fieldset>
          <div class="contact-input-wrapper">
            <label for="how-did-you-hear-about-us" class="contact-label">How did you hear about us?</label>
            <div class="mt-1">
              <input type="text" name="how-did-you-hear-about-us" id="how-did-you-hear-about-us" class="contact-input">
            </div>
          </div>
          <div class="text-right contact-input-wrapper">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
          </div>
        </form>




</div>


<!-- This example requires Tailwind CSS v2.0+ -->
<aside class="sidebar pt-8 pl-7 pr-8 pb-8 overflow-y-auto bg-slate-50">
  <?php include('element_help_sidebar.php'); ?>
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



  