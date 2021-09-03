<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIA2 Midterm Exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <style>
                 input::-webkit-outer-spin-button,
                 input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                 margin: 0;
                 }
  
                 input[type=number] {
                -moz-appearance: textfield;
                 }
            </style>
    </head>
    <body style="background-color: #D0ECE7;">
        <br>
        <h1 style="text-align:center; font-family:courier; font-size:50px">SIA2 MIDTERM EXAM</h1>
        <br>
        <div class="container text-center">
            <div class="row justify-content-center" >
                <div class="col-md-9 justify-content-center" >
                    <form action="calcu" method="POST">
                        @csrf
                        <div class="card" style="background-color: #6B86B6;">
                        <div class="card-body m-auto">
                            <br>
                            <h4 style="text-align:center; font-family:courier; color:white; font-size:50px">CALCULATOR</h4>
                            <br>
                            
                            <div class="form-group row" >
                                <div class="col-md-9">
                                    <select name="formula" class="form-control" style="margin-left: 35px">
                                        <option>Select Output</option>
                                        <option value="perimeter">Perimeter of Rectangle</option>
                                        <option value="volume">Volume of Cuboid</option>
                                        <option value="area">Area of a Square</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="firstnumber" class="form-control" placeholder="Enter Value1:" style="margin-left: 35px">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="secondnumber" class="form-control" placeholder="Enter Value2:" style="margin-left: 35px">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="thirdnumber" class="form-control" placeholder="Enter Value3:"  style="margin-left: 35px">
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-success btn-lg font-weight-bold" value="CALCULATE" style="background-color:#0E357C; font-family:courier;">
                    </div>
                    </form>
                    <div class="row text-center">
                        <div class="col-md-9 m-auto" style="margin-left:35px; background-color:#22E50F; font-family:courier;">
                            @if(session('message'))
                            <div class="container">
                                <h1 class="text-center"> {{session ('message')}}</h1>
                            </div>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>