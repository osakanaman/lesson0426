<?php $__env->startSection('title', '釣果日記'); ?>

<?php $__env->startSection('content'); ?>
   <table>
   <tr><th>釣果</th></tr>
   <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
         <!-- getData()を使わない場合 -->
         <!-- <td><?php echo e($item->id); ?></td>
         <td><?php echo e($item->name); ?></td>
         <td><?php echo e($item->type); ?></td> -->
           <td><?php echo e($item->getData()); ?></td>
       </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.fish_laravel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yoshizawashogo/Desktop/lesson0426/fish_laravel/resources/views/fish/index.blade.php ENDPATH**/ ?>