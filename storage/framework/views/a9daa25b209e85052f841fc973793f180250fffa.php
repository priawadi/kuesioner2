<?php echo e($value); ?>

<div class="form-group">
    <?php echo e(Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	)); ?>

    <div class="col-sm-5">
    	<?php echo e(Form::textarea(
    			$name, 
    			$value, 
    			array_merge(
    				[
						'class'       => 'form-control',
						'placeholder' => $label,
						'cols'        => 3,
						'rows'        => 4
    				], 
    				$attributes
    			)
    		)); ?>

    </div>
</div>