<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name')}}</title>

        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    
    <body>
        
            <div id="wrapper">  
                <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        {{--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>  --}}
                        <a class="navbar-brand" href="/report">Jernixon - Inventory System</a>
                    </div>
                    <!-- Top Menu Items -->
                    
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li class="active">
                                <a href="dashboard"><i class="fa fa-fw fa-dashboard" aria-hidden="true"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="reports"><i class="fa fa-pie-chart"></i>Reports</a>
                            </li>
                            <li>
                                <a href="items"><i class="glyphicon glyphicon-list"></i>Items</a>
                            </li>
                            <li>
                                <a href="employees"><i class="glyphicon glyphicon-list"></i>Employees</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                    
                <div id="page-wrapper">
                    <div class="container-fluid">
                            <!-- Page Heading -->
                            @yield('content')
                            
                            @yield('left')
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        {{--  <button class="btn btn-default btn-lg btn-success" id="add-stock" onclick="clearValuesIn()" data-toggle="modal" data-target="#modal-new-stock">IN
                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                        </button>
                        
                                        <button class="btn btn-default btn-lg btn-success" id="add-request" onclick="clearValuesOut()" data-toggle="modal" data-target="#modal-new-request">OUT
                                            <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
                                        </button>
                                                    
                                        <button class="btn btn-default btn-lg btn-info" id="add-stock" data-toggle="modal" data-target="#modal-new-item">Add Item
                                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                        </button>	
                                                    
                                        <a href='confirmation.php'><button style="float:right" class="btn btn-default btn-lg btn-danger" id="reset">RESET
                                            <i class="fa fa-cog fa-spin"></i>
                                        </button></a>  --}}
   
                                    </h1>
                                </div>
                            </div>
                    </div>
                </div>
                       
            </div>


 

    </body>
</html>
