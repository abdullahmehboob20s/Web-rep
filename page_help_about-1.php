<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      <?php include('dist/output.css'); ?> 
      <?php include('styles/main.css'); ?> 
      <?php include('_demo-files/_demo.css'); ?> 
      <?php include('styles/tailwind_help_article.css'); ?>
      <?php include('styles/tailwind_help_sidebar.css'); ?>  
    </style>
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


        <div class="help_center_card">
            <h2 class="display">What does Crushr do?</h2>
            <p class="help_center_card_desc">Crushr uses smart lossy compression techniques to reduce the file size of your WEBP, JPEG and PNG files. By selectively decreasing the number of colors in the image, fewer bytes are required to store the data. The effect is nearly invisible but it makes a very large difference in file size!</p>
        </div>

        <div class="help_center_card">
            <h2 class="display">Why should I use Crushr?</h2>
            <p class="help_center_card_desc">PNG is useful because it’s the only widely supported format that can store partially transparent images. The format uses compression, but the files can still be large. Use Crushr to shrink images for your apps and sites. It will use less bandwidth and load faster.</p>
        </div>


        <div class="help_center_card">
            <h2 class="display">Can anyone tell the difference?</h2>
            <p class="help_center_card_desc">Crushr Says: Excellent question! Let me give you a side by side comparison. Below are two photos of my cousin. The left image is saved as 24-bit PNG directly from Adobe Photoshop. On the right is the same image processed by Crushr. Spot any difference?</p>
        </div>



<figure class="pngcomparison help_center_figure"><div><figure><span class="border"><img src="https://tinypng.com/images/example-orig.png" alt="Original file"></span><figcaption>Original transparent PNG<br>File size <em>57 KB</em></figcaption></figure><span class="vs">vs</span><figure><span class="border"><img src="https://tinypng.com/images/example-shrunk.png" alt="Compressed transparent PNG file"></span><figcaption>Shrunk transparent PNG<br>File size <em>15 KB</em></figcaption></figure></div></figure>



        <div class="pt-6">
            <p class="help_center_card_desc">In the above image the file size is reduced by more than 70%. I have excellent eyesight but can’t spot the difference either! Use the optimized image to save bandwidth and loading time and your website visitors will thank you.</p>
        </div>

<figure class="pngcomparison help_center_figure"><div><figure><span class="border"><img src="https://tinypng.com/images/example-orig.png" style="width: 146px;" alt="Original file"></span><figcaption>Original transparent PNG<br>File size <em>57 KB</em></figcaption></figure><span class="vs">vs</span><figure><span class="border"><img style="width: 146px;" src="https://tinypng.com/images/example-shrunk.png" alt="Compressed transparent PNG file"></span><figcaption>Shrunk transparent PNG<br>File size <em>15 KB</em></figcaption></figure></div></figure>
<figure class="pngcomparison help_center_figure"><div><figure><span class="border"><img src="https://tinypng.com/images/example-orig.png" style="width: 146px;" alt="Original file"></span><figcaption>Original transparent PNG<br>File size <em>57 KB</em></figcaption></figure><span class="vs">vs</span><figure><span class="border"><img style="width: 146px;" src="https://tinypng.com/images/example-shrunk.png" alt="Compressed transparent PNG file"></span><figcaption>Shrunk transparent PNG<br>File size <em>15 KB</em></figcaption></figure></div></figure>
       

        <div class="help_center_card">
            <h2 class="display">How does it work?</h2>
            <p class="help_center_card_desc">Excellent question! When you upload a PNG (Portable Network Graphics) file, similar colors in your image are combined. This technique is called “quantization”. By reducing the number of colors, 24-bit PNG files can be converted to much smaller 8-bit indexed color images. All unnecessary metadata is stripped too. The result better PNG files with 100% support for transparency. Have your cake and eat it too!</p>
        </div>

        <div class="help_center_card">
            <h2 class="display">Is it supported for all browsers?</h2>
            <p class="help_center_card_desc">Excellent question! The files produced by Crushr are displayed perfectly on all modern browsers including mobile devices. Still need to support Internet Explorer 6? It normally ignores PNG transparency and displays a solid background color. With Crushr the background becomes transparent again. Binary transparency without any workarounds!</p>
        </div>

        <div class="help_center_card">
            <h2 class="display">Why did you create Crushr?</h2>
            <p class="help_center_card_desc">Excellent question! We frequently use PNG images, but were frustrated with the load times. We created Crushr in our quest to make our own websites faster and more fun to use with the best compression. In 2014 we added intelligent compression for JPEG images and in 2016 we added support for animated PNG. Compressing images with the website is free for everyone and we like to keep it that way! If you like Crushr please contribute by making a donation.</p>
        </div>








</div>



<!-- This example requires Tailwind CSS v2.0+ -->
<aside class="sidebar pt-8 pl-6 pr-6 pb-8 overflow-y-auto bg-slate-50">
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



  