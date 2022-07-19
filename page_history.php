<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      <?php include('dist/output.css'); ?> 
      <?php include('styles/main.css'); ?> 
      <?php include('_demo-files/_demo.css'); ?> 
      <?php include('styles/tailwind_history_pager.css'); ?> 
    </style>
    <title>Crushr</title>
  </head>
  <body class="attr-page-history attr-current-plan-free">

  <?php include('_demo-files/_demo_box.php');?>

  <?php include('element_navigation.php');?>

  <div class="page-wrapper">

    <div class="page-inner">

      <header class="page-header">
        <h2 class="display">All Optimizations</h2>
        <div class="view-toggle">
          <div class="inner">
            <div class="view-list"><img class="ui-icon"></div>
            <div class="view-thumb"><img class="ui-icon"></div>
          </div>
        </div>
        <div class="advanced-search">
          <?php include('element_manual-upload.php');?>          
        </div>
        <?php include('element_advanced-search.php');?>
      </header>

      <section class="cnt-optimizations attr-optimizations-history box-css">

        <table class="table">
          <tbody>


          </tbody>
        </table>
        <?php include('element_pager.php'); ?>

      </section>


</div>

</div> <!-- page-wrapper -->

  <script>
    <?php include('js_dropdown.js'); ?>
  </script>

</body>
</html>



  