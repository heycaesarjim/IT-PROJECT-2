@extends('layouts.navbar')
@section('reports_link')
class="active"
@endsection
@section('headScript')
<script type="text/javascript">
    $(document).ready(function() {
        $("#transactionDTButton").click(function(){
            $("div[style='display: block;']").slideUp("slow");
            $("#transactionDiv").slideDown("slow",function(){
                //find div with dislplay:block and slide it UP
                $('#transactionsTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "destroy": true,
                    "colReorder": true,   
                    "ajax":  "{{ route('reports.getTransactions') }}",
                    "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    ]
                });
            });
            $("#transactionDiv").attr("style","display:block");            
            //  $("#transactionDTButton").attr("onclick","hideTransactionDTButton()");
            //slideUp any div if it has a display:block value
        });
        
        $("#returnsDTButton").click(function(){ 
            $("div[style='display: block;']").slideUp("slow");
            $("#returnsDiv").slideDown("slow",function(){
                $('#returnsTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "destroy": true,
                    "colReorder": true,   
                    "ajax":  "{{ route('reports.getReturns') }}",
                    "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    ]
                });
                
            });
            $("#returnsDiv").attr("style","display:block");
            //$("#returnsDTButton").attr("onclick","hideReturnsDTButton()");
        });
        $("#itemsAddedDTButton").click(function(){
            $("div[style='display: block;']").slideUp("slow",function(){
                $('#itemsAddedTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "destroy": true,
                    "colReorder": true,   
                    "ajax":  "{{ route('reports.getItemsAdded') }}",
                    "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    ]
                });
                
            });            
            $("#itemsAddedDiv").slideDown("slow");
            $("#itemsAddedDiv").attr("style","display:block");            
            // $("#itemsAddedDTButton").attr("onclick","hideitemsAddedDTButton()");
        });
        $("#removedItemsDTButton").click(function(){
            $("div[style='display: block;']").slideUp("slow",function(){
                $('#removedItemsTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "destroy": true,
                    "colReorder": true,   
                    "ajax":  "{{ route('reports.getRemovedItems') }}",
                    "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    ]
                });
                
            });            
            $("#removedItemsDiv").slideDown("slow");
            $("#removedItemsDiv").attr("style","display:block");            
            // $("#removedItemsDTButton").attr("onclick","hideRemovedItemsDTButton()");
        });
        
    });
    
    /*function hideTransactionDTButton(){
        $("#transactionDiv").slideUp("slow");
        $("#transactionDTButton").removeAttr("onclick");
    }
    function hideReturnsDTButton(){
        $("#returnsDiv").slideUp("slow");
        $("#returnsDTButton").removeAttr("onclick");
    }
    function hideitemsAddedDTButton(){
        $("#itemsAddedDiv").slideUp("slow");
        $("#itemsAddedDTButton").removeAttr("onclick");
    }
    function hideRemovedItemsDTButton(){
        $("#removedItemsDiv").slideUp("slow");
        $("#removedItemsDTButton").removeAttr("onclick");
    }
    */
    
</script>
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
                        <table id="transactionsTable"  class="table table-hover table-condensed" >
                            <thead >
                                <tr>
                                    <td>Item Purchased</td>
                                    <td>Quantity</td>
                                    <td>Wholesale Price</td>
                                    <td>Retail Price</td>
                                    <td>Total Price</td>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>                        
                    </div> 
                    <div id="returnsDiv" style="display:none">
                        <div class="content table-responsive table-full-width">
                            <ul class="list-group-item-danger">
                                <li>Add datatables for returns</li>
                            </ul>
                        </div>
                        <table id="returnsTable" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <td>description</td>
                                    <td>Quantity</td>
                                    <td>Wholesale Price</td>
                                    <td>Retail Price</td>
                                    <td>Total Price</td>
                                    <td>Reason</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                        </table>                        
                    </div> 
                    <div id="itemsAddedDiv" style="display:none">
                        <div class="content table-responsive table-full-width">
                            <ul class="list-group-item-danger">
                                <li>Add datatables for added items</li>
                            </ul>
                            <table id="itemsAddedTable" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <td>Description</td>
                                        <td>Wholesale Price</td>
                                        <td>Retail Price</td>
                                        <td>Quantity Added</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div> 
                    <div id="removedItemsDiv" style="display:none">
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

@section('js_link')
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>

@endsection
