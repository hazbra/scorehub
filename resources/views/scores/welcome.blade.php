@extends('layouts.app')
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src='/scorehub2.0/public/js/showdivs.js'></script>


@section('content')
  
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to ScoreHub</div>

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
