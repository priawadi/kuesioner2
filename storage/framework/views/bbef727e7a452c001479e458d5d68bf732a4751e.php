<div class="form-group">
    <?php echo e(Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	)); ?>

    <div class="col-sm-5">
        <div class="checkbox">
            <?php echo e(Form::checkbox(
                $name, 
                $value, 
                array_merge(
                    [
                        'class'       => 'form-control'
                    ], 
                    $attributes
                )
            )); ?>

        </div>
    </div>
</div>