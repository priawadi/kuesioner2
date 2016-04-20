<?php if(count($value)>=1): ?>
    <?php for($i = 0; $i < count($value); $i++): ?>
        <?php echo e($value); ?>

    <?php endfor; ?>    
<?php endif; ?>
<!-- <div class="form-group">
    <?php echo e(Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	)); ?>

    <div class="col-sm-10">
        <div class="radio">
            <label>
            	<?php echo e(Form::radio(
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

            </label>
        </div>
    </div>
</div> -->