<?php $__env->startSection('content'); ?>
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($subtitle); ?></div>
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => 'partisipasi-sosial')); ?>

                        <?php foreach($pertanyaan as $idx_pertanyaan => $item): ?>
                        <?php echo e(Form::hidden(
                                'pertanyaan[' . $idx_pertanyaan . ']', 
                                $item->id_partisipasi, 
                                [
                                    'class'       => 'form-control',
                                    'placeholder' => '',
                                    'maxlength'   => 2
                                ]
                            )); ?>

                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'pertanyaan', 
                                    $item->pertanyaan_partisipasi
                                )); ?>

                            <?php foreach($opsi[$item->id_master_opsional] as $idx_opsional => $value): ?>
                            <div class="radio">
                                <label>
                                    <?php echo e(Form::radio(
                                            'jawaban[' . $idx_pertanyaan . ']', 
                                            $idx_opsional,
                                            false,
                                            [
                                                'class' => 'control-label'
                                            ]
                                        )); ?> 
                                    <?php echo e($value); ?>

                                </label>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endforeach; ?>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Simpan</button>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>