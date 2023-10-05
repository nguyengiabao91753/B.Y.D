<?php $__env->startSection('module', 'Insurance detail'); ?>
<?php $__env->startSection('action', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.insurance.store')); ?>">
    <?php echo csrf_field(); ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Insurance detail create</h3>

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
                        <label>Provider</label>
                        <select class="form-control" name="provider_id">
                            <option value="0" <?php echo e(old( 'provider_id' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($provider->id); ?>" <?php echo e(old( 'provider_id' ) == $provider->id ? 'selected' : ''); ?>><?php echo e($provider->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Insurance policy</label>
                        <select class="form-control" name="policy_id">
                            <option value="0" <?php echo e(old( 'policy_id' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($policy->id); ?>" <?php echo e(old( 'policy_id' ) == $policy->id ? 'selected' : ''); ?>><?php echo e($policy->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="0" <?php echo e(old( 'category_id' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php
                            foreach ($categories as $level1) {
                                if ($level1->parent_id == 0) {
                                    echo '<option value="' . $level1->id . '">' . $level1->name . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" name="brand">
                            <option value="0" <?php echo e(old( 'brand' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php
                            foreach ($categories as $key1=> $level1) {
                                if ($level1->parent_id == 0) {
                                    unset($categories[$key1]);
                                    foreach ($categories as $key2=> $level2) {
                                        if ($level2->parent_id == $level1->id) {
                                            unset($categories[$key2]);
                                            foreach ($categories as $key3=> $level3) {
                                                if ($level3->parent_id == $level2->id) {
                                                
                                                echo '<option value="' . $level3->name . '">' . $level3->name . '</option>';
                                                unset($categories[$key3]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <select class="form-control" name="model">
                            <option value="0" <?php echo e(old( 'model' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                            <?php
                            foreach ($categories as $keya=> $levela) {
                                if ($levela->parent_id == 0) {
                                    unset($categories[$keya]);
                                    foreach ($categories as $keyb=> $levelb) {
                                        if ($levelb->parent_id == $levela->id) {
                                            unset($categories[$keyb]);
                                            foreach ($categories as $keyc=> $levelc) {
                                                if ($levelc->parent_id == $levelb->id) {
                                                echo '<option value="' . $levelc->id . '">' . $levelc->name . '</option>';
                                                unset($categories[$keyc]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Current Value(Pkr)</label>
                        <select class="form-control" name="pkr">
                            <option value="0" <?php echo e(old( 'pkr' ) == 0 ? 'selected' : ''); ?>>----- Root -----</option>
                           <?php
                            foreach ($categories as $key1=> $level1) {
                                if ($level1->parent_id == 0) {
                                    unset($categories[$key1]);
                                    foreach ($categories as $key2=> $level2) {
                                        if ($level2->parent_id == $level1->id) {
                                            unset($categories[$key2]);
                                            foreach ($categories as $key3=> $level3) {
                                                if ($level3->parent_id == $level2->id) {
                                                
                                                echo '<option value="' . $level3->id . '">' . $level3->name . '</option>';
                                                unset($categories[$key3]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="price" value="<?php echo e(old('price')); ?>">
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="rate" value="<?php echo e(old('rate')); ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/insurance/create.blade.php ENDPATH**/ ?>