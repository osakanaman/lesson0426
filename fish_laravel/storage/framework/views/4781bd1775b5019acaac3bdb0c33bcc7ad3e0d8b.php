<html>
<head>
   <title><?php echo $__env->yieldContent('title'); ?></title>
   <style>
   body {font-size:16pt; color:#999; margin: 5px; }
   h1 { font-size:50pt; text-align:left; color:blue;
       margin:30px; letter-spacing:-4pt; }
   ul { font-size:12pt; }
   hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
   .content {margin:10px; }
   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
    th {background-color:#999; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
   </style>
</head>
<body>
   <h1><?php echo $__env->yieldContent('title'); ?></h1>
  
   <div class="content">
   <?php echo $__env->yieldContent('content'); ?>
   </div>

</body>

</html><?php /**PATH /Users/yoshizawashogo/Desktop/lesson0426/fish_laravel/resources/views/layouts/fish_laravel.blade.php ENDPATH**/ ?>