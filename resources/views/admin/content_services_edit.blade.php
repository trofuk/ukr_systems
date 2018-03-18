<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('servicesEdit',array('service'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input name']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text', 'Text:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text', $data['text'], ['id' => 'editor', 'class' => 'form-control','placeholder' => 'Input text']) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('icon', 'Icon:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::text('icon', $data['icon'], ['class' => 'form-control','placeholder'=>'Input icon']) !!}
		 </div>
    </div>
	

    
     <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}

	<script>
		CKEDITOR.replace('editor');
	</script>

</div>
</div>