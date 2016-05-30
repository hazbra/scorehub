@extends('layouts.app')


@section('content')
  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" >Welcome to ScoreHub</div>

                <div class="panel-body">
                    <h3>GAA Live Scores</h3>
                    <div id="gaa"></div>
                    <br>
                    <h3>Soccer Live Scores</h3>
                    <div id = "soccer"></div>
                    <br>
                    <h3>Rugby Live Scores</h3>
                    <div id="rugby"></div>
                    <br>
                
                




                </div>
            </div>
        </div>
    </div>
</div>



@endsection
