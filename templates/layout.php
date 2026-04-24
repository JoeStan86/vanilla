<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloomOn</title>

 <!-- Link to your local Tachyons file -->

  <?php include $paths['style']; ?>

  <!-----  <link rel="stylesheet" href="assets/css/test.css">  --->

   
</head>
<body class="sans-serif near-black bg-white">

<!-- Navigation HEADER -->
    <?php include $paths['header']; ?>

<!----PAGE CONTENT------>

    <div class="content">
      <?php echo $Slot; ?>  
    </div>





   <!--- Footer -->
      <?php include $paths['footer']; ?>    
      
    </body>
</html>


<!---Layout---->

