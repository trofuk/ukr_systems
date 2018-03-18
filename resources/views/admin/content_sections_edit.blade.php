<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('sectionsEdit',array('section'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('title', 'Title:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('title', $data['title'], ['class' => 'form-control','placeholder'=>'Input title']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('description', 'Description:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('description', $data['description'], ['id' => 'editor', 'class' => 'form-control','placeholder' => 'Input description']) !!}
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