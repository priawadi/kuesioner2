<?php $__env->startSection('content'); ?>
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Responden</div>
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => 'sample', 'class' => 'form-horizontal')); ?>

                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'nama', 
                                    'Nama Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-10">
                                <?php echo e(Form::text(
                                        'nama', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Nama Responden'
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'alamat', 
                                    'Alamat', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                            <div class="col-sm-5">
                                <?php echo e(Form::textarea(
                                        'alamat', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Alamat'
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'aktif', 
                                    'Aktif?', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <?php echo e(Form::checkbox(
                                                'aktif', 
                                                true,
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )); ?> 
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'kategori', 
                                    'Kategori', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                            <div class="col-sm-5">
                                <?php echo e(Form::select(
                                        'kategori', 
                                        [
                                            'L' => 'Large', 'S' => 'Small'
                                        ], 
                                        null, 
                                        [
                                            'class' => 'form-control',
                                            'placeholder' => 'Pilih'
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'jenis_kelamin', 
                                    'Jenis Kelamin', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <?php echo e(Form::radio(
                                                'jenis_kelamin', 
                                                'P',
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )); ?> 
                                        Pria
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <?php echo e(Form::radio(
                                                'jenis_kelamin', 
                                                'W',
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )); ?> 
                                        Wanita
                                    </label>
                                </div>
                            </div>
                        </div>

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