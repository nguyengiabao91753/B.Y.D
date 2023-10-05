<?php $__env->startSection('module', 'Insurance detail'); ?>
<?php $__env->startSection('action', 'List'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css ')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('administrator/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('hanldejs'); ?>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Insurance list</h3>

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
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Provider</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Value(PKR)</th>
                    <th>Price</th>
                    <th>Rate</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($insurance->provider->name); ?></td>
                    <td><?php echo e($insurance->policy->name); ?></td>
                    <td><?php echo e($insurance->category->name); ?></td>
                    <td><?php echo e($insurance->brand); ?></td>
                    <td><?php echo e($insurance->model); ?></td>
                    <td><?php echo e($insurance->pkr); ?></td>
                    <td><?php echo e($insurance->price); ?></td>
                    <td><?php echo e($insurance->rate); ?></td>
                    <td><a href="<?php echo e(route('admin.insurance.edit',['id'=> $insurance->id])); ?>">Edit</a></td>
                    <td><a onclick="return confirmDelete()" href="<?php echo e(route('admin.insurance.destroy',['id'=> $insurance->id])); ?>">Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Provider</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Value(PKR)</th>
                    <th>Price</th>
                    <th>Rate</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/insurance/index.blade.php ENDPATH**/ ?>