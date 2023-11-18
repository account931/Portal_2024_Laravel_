
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
	
        <div class="col-md-8 col-md-offset-2">
		
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img class="img-responsive my-cph" style="width:5%" src="{{URL::to('/')}}/images/person.png"  alt=""/>				
				    <p>One user profile</p>

				</div>
				
				<!-- Link to go back -->
				<div>
				    &nbsp;<i class="fa fa-hand-o-left" style="font-size:24px"></i>
				    <a href="{{ url('/EloquentExample') }}">back to users </a>
                </div>
				 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
				
            </div>
        </div>
     </div><!-- row -->   	
		
		
	
		
		<div class="panel panel-default">
		  <div class="panel-body ">
	
			
		    <div class="panel panel-default">
			    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> {{ $userOne->id}}</div>
                <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> {{ $userOne->name}}</div>
				<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> {{ $userOne->email}}</div>
				<div class="panel-heading">{{ $userOne->username}}</div>
				<div class="panel-heading">Register date: {{ $userOne->registerDate}}</div>
				<div class="panel-heading">Last login:    {{ $userOne->lastvistDate ? $userOne->lastvistDate :'no data'}}</div>
				<div class="panel-heading">City(hasOne): {{ $userOne->profile->cb_city}}</div>
				<div class="panel-heading">Birthday(hasOne): {{ $userOne->profile->cb_birthday}}</div>
				<div class="panel-heading">Position(hasOne): {{ $userOne->profile->cb_position ?  $userOne->profile->cb_position : 'not set'}}</div>
				<div class="panel-heading">Phone(hasOne): {{ $userOne->profile->cb_phone}}</div>
				<div class="panel-heading">Hobby(hasOne): {{ $userOne->profile->cb_hobby ? $userOne->profile->cb_hobby : 'not set'}}</div>

			</div>
		   
			
		  

				
				
		  </div>
		</div>
		
    </div>
</div>
@endsection