<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Data Responden</div>
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="panel-body">
                    <a href="<?php echo e(url('responden/tambah')); ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    <br><br>
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Nama Responden</th> 
                                <th>Suku</th> 
                                <th>Kampung</th> 
                                <th>Dusun</th> 
                                <th>Aksi</th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <?php foreach($responden as $index => $item): ?>
                            <tr> 
                                <th scope="row"><?php echo e($index + 1); ?></th> 
                                <td><?php echo e($item->nama_responden); ?></td> 
                                <td><?php echo e($item->suku); ?></td> 
                                <td><?php echo e($item->kampung); ?></td> 
                                <td><?php echo e($item->dusun); ?></td> 
                                <td>
                                    <!-- <a href="" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a> -->
                                    <a href="" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="<?php echo e(url('responden/lihat/' . $item->id_responden)); ?>" title="Lihat"><i class="glyphicon glyphicon-file"></i></a>
                                </td> 
                            </tr>
                            <?php endforeach; ?>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>