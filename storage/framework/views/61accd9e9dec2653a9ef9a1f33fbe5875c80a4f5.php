<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($subtitle); ?></div>
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="panel-body">
                    <?php echo e(Form::open(array('url' => $action))); ?>

                        <table class="table">
                        <?php foreach($pertanyaan as $idx_pertanyaan => $item): ?>
                        <tr>
                            <td><?php echo e($item->id_partisipasi); ?>.</td>
                            <td>
                                <?php echo e($item->pertanyaan_partisipasi); ?>

                                <?php if($item->is_reason): ?>
                                <br>
                                Alasan:                             
                                <?php echo e(Form::textarea(
                                        'alasan[' . $item->id_partisipasi . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control col-sm-6',
                                            'placeholder' => 'Alasan',
                                            'rows'  => 4
                                        ]
                                    )); ?> 
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php foreach($opsi[$item->id_master_opsional] as $idx_opsional => $value): ?>
                                <div class="radio">
                                    <label>
                                        <?php echo e(Form::radio(
                                                'jawaban[' . $item->id_partisipasi . ']', 
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
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </table>
                        <?php echo $__env->make('components.form.prev_next_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>