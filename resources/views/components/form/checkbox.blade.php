<div class="form-group">
    {{ 
    	Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	) 
    }}
    <div class="col-sm-5">
        <div class="checkbox">
            {{ 
            Form::checkbox(
                $name, 
                $value, 
                array_merge(
                    [
                        'class'       => 'form-control'
                    ], 
                    $attributes
                )
            ) 
        }}
        </div>
    </div>
</div>