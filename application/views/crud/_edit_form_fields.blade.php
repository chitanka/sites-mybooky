	@foreach($fields as $field => $options)
	@if( $options['edit'] )
		<div class="form-group">
			<label for="{{ $field }}" class="col-sm-2 control-label">{{ __('admin.field_'.$field) }}</label>
			<div class="col-sm-10">
			@if( $options['type'] == 'textarea' )
				{{ Form::textarea($field, Input::old($field, $object->$field), array('class' => 'form-control')) }}
			@elseif ( $options['type'] == 'hidden' )
				{{ Form::hidden($field, Input::old($field, $object->$field), array('class' => 'form-control')) }}
			@elseif ( $options['type'] == 'select' )
				{{ Form::select($field.($options['multiple'] ? '[]' : ''), $options['choices'], Input::old($field, $object->$field()->lists('id')), array('class' => 'form-control', 'placeholder' => 'Избор') + ($options['multiple'] ? array('multiple') : array())) }}
			@else
				{{ Form::text($field, Input::old($field, $object->$field), array('class' => 'form-control')) }}
			@endif
			</div>
		</div>
	@endif
	@endforeach