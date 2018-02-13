@extends('layouts.navbar')
@section('reports_link')
       class="active"
@endsection
@section('right')
        <i><p style="color:red;font-size:20px">Reports under construction!</p></i>
        <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar bar1"></span>
                                    <span class="icon-bar bar2"></span>
                                    <span class="icon-bar bar3"></span>
                                </button>
                                <a class="navbar-brand" href="#"><i class="ti-clipboard"> </i>Reports</a>
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
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <div class = "content">
                                                    <div class="row">
                                                        <p class = "col-md-12">
                                                            <input type="text" name="search" placeholder="Enter date (MM-DD-YYYY)" class = "form-control border-input" >
                                                        </p>  
                                                    </div>
                                                <p>
                                                    <label class="category">Generate Report:</label>
                                                    <button type="submit" class="btn btn-success"><i class = "fa fa-file-excel-o"></i> Excel</button> <button type="submit" class="btn btn-danger"><i class="  fa fa-file-pdf-o"></i> PDF</button>
                                                </p>
                                            </div>

                                            <div class="btn-group btn-group-lg" role="group" aria-label="">
                                               <button type="button" id="transactionDTButton" class="btn btn-info">Transaction</button>
                                               <button type="button" id="returnsDTButton" class="btn btn-info">Returns</button>
                                               <button type="button" id="itemsAddedDTButton" class="btn btn-info">Items Added</button>
                                               <button type="button" id="removedItemsDTButton" class="btn btn-info">Removed Items</button>
                                            </div>
                                        </div>
                                     
                        
                                        <div id="transactionDiv" style="display:none">
                                            <div class="content table-responsive table-full-width">
                                                    <ul class="list-group-item-danger">
                                                            <li>Add datatables for transaction</li>
                                                    </ul>
                                            </div>    
                                        </div> 
                                        <div id="returnsDiv" style="display:none">
                                            <div class="content table-responsive table-full-width">
                                                    <ul class="list-group-item-danger">
                                                            <li>Add datatables for returns</li>
                                                    </ul>
                                            </div>
                                        </div> 
                                        <div id="itemsAddedDiv" style="display:none">
                                            <div class="content table-responsive table-full-width">
                                                    <ul class="list-group-item-danger">
                                                            <li>Add datatables for added items</li>
                                                    </ul>
                                            </div>
                                        </div> 
                                        <div id="removedItems" style="display:none">
                                            <div class="content table-responsive table-full-width">
                                                    <ul class="list-group-item-danger">
                                                            <li>Add datatables for removed items</li>
                                                    </ul>
                                            </div>
                                        </div> 
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('jqueryScript')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#transactionDTButton").click(function(){
                //$("#transactionDiv").css("display:block");
                document.getElementById("transactionDiv").setAttribute("style","display:block");

            });
        });

    </script>
@endsection

@section('js_link')
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
@endsection
