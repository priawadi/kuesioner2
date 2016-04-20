<div class="form-group">
    <?php echo e(Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	)); ?>

    <div class="col-sm-10">
    	<?php echo e(Form::text(
    			$name, 
    			$value, 
    			array_merge(
    				[
    					'class' => 'form-control',
						'placeholder' => $label
    				], 
    				$attributes
    			)
    		)); ?>

    </div>
</div>