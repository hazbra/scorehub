@extends('layouts.app')
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 <script src='/scorehub2.0/public/js/matchFunctions.js'></script>
 <script src='/scorehub2.0/public/js/jsTimeWatch.min.js'></script>
  <script src='/scorehub2.0/public/js/clockFunctions.js'></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <p><a href="/scorehub2.0/public/sports">Select Sport</a></p>


                     <div id="gaa"></div>
                    <br>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection