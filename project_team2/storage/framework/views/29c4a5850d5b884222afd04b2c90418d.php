

<?php $__env->startSection('module', 'Provider'); ?>
<?php $__env->startSection('action', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.provider.update',['id'=>$id])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Provider update</h3>

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
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter product name" name="name" value="<?php echo e(old('name',$provider->name)); ?>">
                    </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image current</label>
                        <img src="<?php echo e(asset('uploads/'.$provider->image)); ?>" alt="" width="100px">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    <!-- /.card -->
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/provider/edit.blade.php ENDPATH**/ ?>