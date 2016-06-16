@extends('layouts.default')
<title>Datepicker</title>

<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Datepicker Files -->
<link rel="stylesheet" href="{{asset('css\bootstrap-datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
<script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>

<script src="js/bootstrap-datetimepicker.js"></script>
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
<script src="js/bootstrap-datetimepicker.es.js"></script>
<link rel="stylesheet" href="css/calendar.css">


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<!-- Languaje -->
<script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

@section('content')

    <div class="container">
        <div class="content">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-4 col-md-offset-4">

                        <form action="/test/save" method="post">
                            <div class="form-group">
                                <label for="date">Fecha</label>
                                <div class="input-group">
                                    <input type="text" class="form-control datepicker" name="date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>
            <div class='col-sm-6'>
                <input type="hidden" id="lang" vale="{{Config::get('app.locale')}}">
            </div>

        </div>
    </div>

    {!! Form::text('date', '', array('id' => 'datepicker','class' => 'form-control')) !!}

    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>








@stop