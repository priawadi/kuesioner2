@if(count($value)>=1)
    @for($i = 0; $i < count($value); $i++)
        {{$value}}
    @endfor    
@endif
<!-- <div class="form-group">
    {{ 
    	Form::label(
    		$label, 
    		null, 
    		[ 
				'class' => 'col-sm-2 control-label',
    		]
    	) 
    }}
    <div class="col-sm-10">
        <div class="radio">
            <label>
            	{{ 
            		Form::radio(
            			$name, 
            			$value,
            			array_merge(
            				[
            					'class' => 'form-control',
        						'placeholder' => $label
            				], 
            				$attributes
            			)
            		)
            	}}
            </label>
        </div>
    </div>
</div> -->