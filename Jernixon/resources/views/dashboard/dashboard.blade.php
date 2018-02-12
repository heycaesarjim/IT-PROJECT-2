@extends('layouts.navbar')
@section('dashboard_link')
  class="active"
@endsection

@extends('inc.headScripts')

@section('right')
<div class="content">
        <i><p style="color:red;font-size:20px">Items under construction!</p></i>
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="ti-panel"></i> Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-user"></i>
                            <p class="notification"></p>
                            <p>Admin</p>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="notifications.html">Notifications</a></li>
                            <li><a href="changepassword.html">Change Password</a></li>
                            <li><a href="#">Log out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{--  style="border: 2px solid green"  --}}
    <div class="row">
        <div class="col-md-12" >
            <div class="card" >
                <div class="header">
                        <div class="row" >
                                <div class="panel-heading">
                                        <div class="row">
                                            <div class="col col-xs-5">
                                                <label><i class = "ti-search"></i> Search</label>
                                                <input type="text" onkeyup="searchItem2(this)" id="dashboardSearchItem" class="form-control border-input" placeholder="Enter the name of the item">
                                            </div>
                                            <div class="col col-xs-7 text-right">
                                                    <a href = "#addtocart" data-toggle="modal" class="btn btn-lg btn-primary btn-create"><i class = "fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                  <table class="table table-hover table-condensed" style="width:100%">
                                    <thead> 
                                        <tr>
                                            <th>Ids</th>
                                            <th>Description</th>
                                            <th>Quantity in Stock</th>
                                            <th>Wholesale Price</th>
                                            <th>Retail Price</th>
                                            <th>Add to Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dashboardDatatable">

                                    </tbody>
                                  </table>
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" >
                <div class="card" >
                     <div class="header">
                         <ul class="list-group-item-danger">
                            <li>Add graphs (top items, least items)</li>
                         </ul>
                    </div>
                </div>
        </div>
    </div>
    
</div>

@endsection     

@section('modals')
<div id="addtocart" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">
    <div class = "modal-dialog">
        <div class = "modal-content">
            <div class = "modal-body">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4>Customer Purchase</h4>
                <div class="row">
                    <div class="col-md-3 text-right">
                        <label>Customer Name: </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border-input" form="purchase" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-right">
                        <label>Date of Purchased</label>
                    </div>
                    <div class="col-md-9">
                        <input type="date">
                        <span class="add-on">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          
                        </span>   
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-md-3 text-right">
                        <label>Total Price: </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" disabled class="form-control border-input" form="purchase" value="500">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">Description</th>
                                    <th>Retail Price</th>
                                    <th>Quantity Purchase</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr> 
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="text-right">                                           
                            <div class="col-md-12">                                                    
                                <input type="submit" form="purchase" class="btn btn-primary">
                                <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
{{--  @section('jqueryScript')
    <script type="text/javascript">
        $(document).ready(function() {
            
             $('#dashboardDatatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":  "{{ route('dashboardItems.getItems') }}",
                "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                ]
            });

        });
    </script>
@endsection  --}}
@section('js_link')
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
{{--  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>  --}}

@endsection