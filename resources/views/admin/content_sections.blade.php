<div style="margin:50px 50px 0px 50px;">   

@if($sections)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Title</td>
	                <td style="font-weight: 600; text-align: center;">Description</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($sections as $k => $section)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">{{ $section->id }}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('sectionsEdit',['section'=>$section->id]),$section->title,['alt'=>$section->title]) !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $section->description !!}</td>
				<td style="text-align: center; vertical-align: middle;">{{ $section->created_at }}</td>
                
                <td style="text-align: center; vertical-align: middle;">
                    {!! Form::open(['url'=>route('sectionsEdit',['section'=>$section->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>
            </tr>
		@endforeach
     </tbody>
	</table>

@endif 

<div style="padding-bottom: 20px;" >
{!! Html::link(route('sectionsAdd'),'New section') !!}
</div> 

</div>