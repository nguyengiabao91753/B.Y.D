<?php $__env->startSection('module', 'User'); ?>
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
  </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User list</h3>

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
                    <th>Email</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Fullname</th>
                    <th>Phone</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>admin@gmail.com</td>
                    <td><span class="right badge badge-success">Admin</span></td>
                    <td><span class="right badge badge-danger">Show</span></td>
                    <td>Vũ Quốc Tuấn</td>
                    <td>090 123 4567</td>
                    <td>26/09/2023 - 15:10</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Fullname</th>
                    <th>Phone</th>
                    <th>Create At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/admin/modules/user/index.blade.php ENDPATH**/ ?>