@include('crud._edit_form_breadcrumbs')

{{ Form::open(null, 'post', array('class' => 'form-horizontal', 'role' => 'form')) }}
	@include('crud._edit_form_fields')

	@include('crud._edit_form_submit')
{{ Form::close() }}
