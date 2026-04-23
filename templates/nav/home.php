<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloomOn</title>
    <!-- Link to your local Tachyons file -->


   <style>
        /* Your custom "Tweaks" */
        :root { --brand-purple: #7e22ce; }
        .bg-brand { background-color: var(--brand-purple); }
        .hover-brand:hover { color: var(--brand-purple); }
        .f-calligraphy { 
           font-family: 'Dancing Script', cursive; 
           text-transform: none;
        }
    </style>   



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
 <link  rel="stylesheet" href="assets/css/tachyons.css">
  <!-----  <link rel="stylesheet" href="assets/css/test.css">  --->

   
</head>
<body class="sans-serif near-black bg-white">

    <!-- Navigation -->
    <nav class="db dt-l w-100 border-box pa3 ph4-l bb b--black-10 mw9 center">
      <a class="f-calligraphy db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb2 mb0-l fw7 f1" href="#" title="Home">Jessica Joy Bloom</a>
      <div class="db dtc-l v-mid w-100 w-75-l tc tr-l">
        <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l hover-brand" href="#features" title="Features">Features</a>
        <a class="link dim dark-gray f6 f5-l dib hover-brand" href="#contact" title="Contact">Contact</a>
      </div>
    </nav>

    <!-- Hero Section -->
    <header class="vh-75 white cover bg-center dt w-100"
     style="background-image: url('assets/images/Stanish Family-0075.jpg'); "> 
      <div class="dtc v-mid tc ph3 ph4-l bg-black-60 " >
        <h1 class="f2 f1-l fw6 white-90 mb0 lh-title">Fast. Vanilla. FrankenPHP.</h1>
        <h2 class="fw1 f3 white-80 mt3 mb4">Building a lightweight landing page on a VM. Every Day of the Week.</h2>
        <a class="f6 no-underline grow dib v-mid bg-white black ba b--white ph4 pv3 mb3" href="#contact">Get Retarded.</a>
      </div>
    </header>
 <!-- Features Section -->
    <section id="features" class="pv5 ph3 ph4-l mw9 center">
      <div class="flex-l mhn3-l">
        <div class="w-100 w-33-l ph3-l mb4">
          <h3 class="f4 fw6">Fast Execution</h3>
          <p class="lh-copy mt2 mid-gray">Running on FrankenPHP for top-tier performance.</p>
        </div>
        <div class="w-100 w-33-l ph3-l mb4">
          <h3 class="f4 fw6">Vanilla PHP</h3>
          <p class="lh-copy mt2 mid-gray">No heavy frameworks, just clean code and Tachyons.</p>
        </div>
        <div class="w-100 w-33-l ph3-l mb4">
          <h3 class="f4 fw6">VM Hosted</h3>
          <p class="lh-copy mt2 mid-gray">Full control over the environment on a custom Linux VM.</p>
        </div>
      </div>
    </section>
<!-- Contact / Signup Section -->
<section id="contact" class="pv5 bg-light-gray ph3">
  <div class="mw7 center tc">
    <h2 class="f3 f2-l fw6 mb3">Join the Newsletter</h2>
    <p class="lh-copy mid-gray mb4">Get updates on the FrankenPHP project.</p>
    
    <form action="signup.php" method="POST" class="mw6 center">
      <div class="cf">
        <input class="f6 f5-l input-reset bn fl black-80 bg-white pa3 lh-solid w-100 w-75-m w-80-l br2-ns br--left-ns" 
               placeholder="Your Email Address" type="email" name="email" required>
        <input class="f6 f5-l button-reset fl pv3 tc bn bg-brand white pointer w-100 w-25-m w-20-l br2-ns br--right-ns grow" 
               type="submit" value="Sign Up">
      </div>
    </form>
  </div>
</section>
    <!-- Footer -->
    <footer class="pv4 ph3 ph5-m ph6-l mid-gray bt b--black-10">
      <small class="f6 db tc">© 2024 <b class="ttu">Jessica Joy Bloom</b>. All Rights Reserved</small>
    </footer>

</body>
</html>
