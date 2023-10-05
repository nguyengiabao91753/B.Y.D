<?php $__env->startSection('module', 'Invoice'); ?>
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
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    function confirmDelete (module) {
        return confirm('Are you sure you want to delete this ${module} ?');
    }
</script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- Default box --> 
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Invoice List</h3>

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
                    <th>Contract</th>
                    <th>Due Date</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($invoice->contract_id); ?></td>
                        <td><?php echo e($invoice->duedate ? Carbon\Carbon::parse($invoice ->duedate)->format('d/m/Y - H:m:i') : '-'); ?></td>
                        <td><?php echo e(date('d/m/Y - H:m:i', strtotime($invoice->created_at))); ?></td>
                        <td><a href="<?php echo e(route('admin.invoice.edit',['id'=> $invoice->id])); ?>">Edit</a></td>
                        <td><a onclick="return confirmDelete('invoice')" href="<?php echo e(route('admin.invoice.destroy',['id'=> $invoice->id])); ?>">Delete</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Contract</th>
                    <th>Due Date</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/invoice/index.blade.php ENDPATH**/ ?>