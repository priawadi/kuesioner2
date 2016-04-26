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
                <div class="row">
                    <div class="col-sm-2"><center><b>RINCIAN</b></center></div>    
                    <div class="col-sm-6"><center><b>ISIAN</b></center></div>    
                    <div class="col-sm-2"><center><b>KODE KONDISI AWAL</b></center></div>    
                    <div class="col-sm-2"><center><b>KODE (Saat Pencacahan) </b></center></div>    
                </div>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => 'responden/tambah', 'class' => 'form-horizontal')); ?>

                        <div class="form-group <?php if($errors->has('nama_responden')): ?> has-error <?php endif; ?>">
                            <?php echo e(Form::label(
                                    'id_id', 
                                    'ID', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'id_id', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'ID',
                                            'maxlength'   => 8

                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-offset-4 col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_id', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_id', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'nama_responden', 
                                    'Nama Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'nama_responden', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Nama Responden'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_nama', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_nama', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'suku', 
                                    'Etnis / Suku', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'suku', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Etnis / Suku'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_suku', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_suku', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'kampung', 
                                    'RT / Kampung', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'kampung', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'RT / Kampung'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_kampung', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_kampung', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'dusun', 
                                    'RW / Dusun', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'dusun', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'RW / Dusun'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_dusun', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_dusun', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'kelurahan', 
                                    'Desa / Kelurahan', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'kelurahan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Desa / Kelurahan'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_kelurahan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 3
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_kelurahan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 3
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'kecamatan', 
                                    'Kecamatan', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'kecamatan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Kecamatan'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_kecamatan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 3
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_kecamatan', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 3
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'kabupaten', 
                                    'Kabupaten', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'kabupaten', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Kabupaten'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_kabupaten', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_kabupaten', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'provinsi', 
                                    'Provinsi', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'provinsi', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Provinsi'
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodeawal_provinsi', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                            <div class="col-sm-2">
                                <?php echo e(Form::text(
                                        'kodecacah_provinsi', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => '',
                                            'maxlength'   => 2
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'tipologi', 
                                    'Tipologi', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                        
                            <div class="col-sm-6">
                                <?php echo e(Form::text(
                                        'tipologi', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Tipologi'
                                        ]
                                    )); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::label(
                                    'stat_responden', 
                                    'Status Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )); ?>

                            <div class="col-sm-10">
                                <?php foreach($status as $k => $v): ?>
                                    <div class="radio">
                                        <label>
                                            <?php echo e(Form::radio(
                                                    'stat_responden', 
                                                    $k,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )); ?> 
                                            <?php echo e($v); ?>

                                        </label>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="<?php echo e(url('responden')); ?>" class="btn btn-link btn-sm">Batal</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
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