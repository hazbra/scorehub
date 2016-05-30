@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Sports</div>
				<div class="panel-body">
			      <ul class="list-group">
			        @foreach ($sports as $row) 
			          <li class="list-group-item">
			          	 <a href="/scorehub2.0/public/sports/{{ $row->id }}"> 
			          	 	{{ $row->name }}</a>
			          </li>
					@endforeach
			      </ul>
			    </div>
		</div>
	</div>
</div>
@endsection
     
            


       
   
