<?php $__env->startSection('title', '釣果日記'); ?>

<?php $__env->startSection('content'); ?>
   <p><?php echo e($msg); ?></p>
   <?php if(count($errors) > 0): ?>
   <p>入力に問題があります</p>
   <?php endif; ?>

   <form action="/fish" method="post">
   <table>
       <?php echo csrf_field(); ?>
       <?php if($errors->has('name')): ?>
       <tr><th>ERROR</th><td><?php echo e($errors->first('name')); ?></td></tr>
       <?php endif; ?>
       <tr><th>釣った人: </th><td><input type="text" name="name"
           value="<?php echo e(old('name')); ?>"></td></tr>
      
      <?php if($errors->has('fishname')): ?>
       <tr><th>ERROR</th><td><?php echo e($errors->first('fishname')); ?></td></tr>
       <?php endif; ?>
       <tr><th>釣った魚: </th><td><input type="text" name="fishname"
           value="<?php echo e(old('fishname')); ?>"></td></tr>
      
      <?php if($errors->has('date')): ?>
       <tr><th>ERROR</th><td><?php echo e($errors->first('date')); ?></td></tr>
       <?php endif; ?>
       <tr><th>釣った日: </th><td><input type="date" name="date"
           value="<?php echo e(old('date')); ?>"></td></tr>

       <tr><th></th><td><input type="submit" 
            value="send"></td></tr>
   </table>
   </form>
<?php $__env->stopSection(); ?>
<!-- <?php $__env->startSection('content'); ?>
    <p><?php echo e($msg); ?></p>
    <?php if(count($errors) > 0): ?>
        <p>入力に問題があります。再入力して下さい。</p>
    <?php endif; ?>
    <form action="/fish" method="post">
    <table>
        <?php echo csrf_field(); ?>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>釣った人: </th><td><input type="text" 
            name="name" value="<?php echo e(old('name')); ?>"></td></tr>

        <?php $__errorArgs = ['fishName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>釣った魚: </th><td><input type="text" 
            name="fishName" value="<?php echo e(old('fishName')); ?>"></td></tr>

        <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>釣った日: </th><td><input type="text" 
            name="date" value="<?php echo e(old('date')); ?>"></td></tr>

        <tr><th></th><td><input type="submit" value="send">

        </td></tr>
    </table>
    </form>
<?php $__env->stopSection(); ?> -->


<?php echo $__env->make('layouts.fish_laravel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yoshizawashogo/Desktop/fish_laravel/resources/views/fish/index.blade.php ENDPATH**/ ?>