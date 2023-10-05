<?php $__env->startSection('module', 'Contract'); ?>
<?php $__env->startSection('action', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.contract.store')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contract Create</h3>

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
                <div class="col-md-6">
                    <label>Customer ID</label>
                        <select class="form-control" name="customer_id">
                            <option value="0" <?php echo e(old( 'custormer_id' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($customer->id); ?>" <?php echo e(old( 'custormer_id' ) == $customer->id ? 'selected' : ''); ?>><?php echo e($customer-> email); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Insurance ID</label>
                        <select class="form-control" name="insurance_id">
                            <option value="0" <?php echo e(old( 'insurance_id' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($insurance->id); ?>" <?php echo e(old( 'insurance_id' ) == $insurance->id ? 'selected' : ''); ?>><?php echo e($insurance->id); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            <div class="form-group">
            <div class="col-md-6">
                    <label for="enddate" >EndDate</label>
                    <input type="date" id="duedate" class="form-control" name="enddate" min="2018-09-24" max="2025-10-20"
                            placeholder="Enter Date" value="<?php echo e(old('duedate')); ?>">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/contract/create.blade.php ENDPATH**/ ?>