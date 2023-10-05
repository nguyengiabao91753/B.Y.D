<?php $__env->startSection('module', 'Customer'); ?>
<?php $__env->startSection('action', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.customer.store')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer create</h3>

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
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="<?php echo e(old('firstname')); ?>">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                    </div>
                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="last name" name="lastname" value="<?php echo e(old('lastname')); ?>">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password_confirmation">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="1" <?php echo e(old('level')==1 ? 'selected': ''); ?>>Admin</option>
                        <option value="2" <?php echo e(old('level')==2 ? 'selected' : ''); ?>>Member</option>
                    </select>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo e(old('email')); ?>">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="<?php echo e(old('phone')); ?>">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/customer/create.blade.php ENDPATH**/ ?>