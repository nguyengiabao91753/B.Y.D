<?php $__env->startSection('module', 'Category'); ?>
<?php $__env->startSection('action', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.category.store')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category create</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="">Categories parent</label>
                <select name="parent_id" id="">
                    <option value="0">----Root----</option>
                    <?php 
                        recursiveCategory($categories);
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Category name</label>
                <input type="text" class="form-control" placeholder="Enter category name" name="name" value="<?php echo e(old('name')); ?>">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/category/create.blade.php ENDPATH**/ ?>