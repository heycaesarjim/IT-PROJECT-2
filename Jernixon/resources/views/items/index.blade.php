@extends('layouts.navbar')

@section('items_link')
       class="active"
@endsection

@section('right')
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
                <a class="navbar-brand" href="#"><i class="ti-view-list-alt"> </i>Items</a>
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
                                <form class = "form-inline">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label><i class = "ti-search"></i> Search</label>
                                            <input type="text" class="form-control border-input" placeholder="Enter name of item">
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-left">                                               
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                              <a href = "#edit" data-toggle="modal" class="btn btn-info btn-fill" >Edit </a>
                                              <a href = "#addquan" data-toggle="modal"  class="btn btn-info btn-fill">Add</a>
                                              <a href = "#subtract" data-toggle="modal" class="btn btn-info btn-fill">Subtract </a>                                     
                                              <a href = "#return" data-toggle="modal"  class="btn btn-info btn-fill">Return</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class = "text-right">
                                            <a href = "#addnew" data-toggle="modal">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd btn-success"><i class = "ti-plus"></i> Add new item</button> 
                                            </a>        
                                            <a href = "#remove" data-toggle="modal">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd btn-danger"><i class="ti-minus"></i> Remove item</button>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
<br>
                        <ul class="list-group-item-danger">
                                <li>Add datatables</li>
                        </ul> 


                    </div>
                </div>
            </div>
        </div>
    </div>
        @if(count($products) > 1)
                @foreach ($products as $product)
                        <div class="well">
                                <h3>{{$product->description}}</h3>
                        </div>
                @endforeach
        @else
                <h5>No items</h5>
        @endif
@endsection

@section('modals')
<div id="addnew" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-body">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4>Add New Item</h4>
                    <form id="addnewform" action = "" method="post" class="ajax">
                        <div class="form-group">
                            
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Description:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control border-input" form="addnewform">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Quantity in Stock:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="addnewform" class="form-control border-input">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>WholeSale price:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="addnewform" class="form-control border-input">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Retail price:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="addnewform" class="form-control border-input">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="text-right">                                           
                                <div class="col-md-12">                                                    
                                    <input type="submit" form="addnewform" name="Save" value="Save" class="btn btn-primary">
                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                </div>                             
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

         </div>

</div>
<div id="addquan" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">

        <div class = "modal-dialog modal-lg">

            <div class = "modal-content">

                <div class = "modal-body">

                    <button class="close" data-dismiss="modal">&times;</button>

                    <h4> Add Quantity</h4>

                    <form action = "" id="addquanform" method="post" class="ajax">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label><i class = "ti-search"></i> Search</label>
                                    <input type="text" class="form-control border-input" placeholder="Enter the name of the item">

                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Description</th>
                                            <th>Quantity in Stock</th>
                                            <th>Quantity</th>
                                            <th>WholeSale Price</th>
                                            <th>Retail Price</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item 69</td>
                                                <td>50</td>
                                                <td><div class="form-group">
                                                        <input type="number" form="addquanform" class="form-control" id="WholeSale">
                                                    </div>
                                                </td>
                                                <td>Php 150.00</td>
                                                <td>Php 175.00</td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                            <div class="text-right">                                           
                                <div class="col-md-12">                                                    
                                    <input type="submit" form="addquanform" name="submitedit" class="btn btn-primary">
                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                </div>                             
                            </div>
                        </div>

                    </form>

                </div>

            </div>

         </div>

    </div>
    <div id="edit" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">

        <div class = "modal-dialog modal-lg">

            <div class = "modal-content">

                <div class = "modal-body">

                    <button class="close" data-dismiss="modal">&times;</button>

                    <h4>Edit</h4>

                    <form action = "" id="editform" method="post" class="ajax">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label><i class = "ti-search"></i> Search</label>
                                    <input type="text" class="form-control border-input" placeholder="Enter the name of the item">

                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Description</th>
                                            <th>Quantity in Stock</th>
                                            <th>WholeSale Price</th>
                                            <th>Retail Price</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item 69</td>
                                                <td>50</td>
                                                <td>                                                         
                                                    <div class="form-group">
                                                        <input type="text" form="editform" class="form-control" id="WholeSale">
                                                    </div>                                                         
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" form="editform" class="form-control" id="retail">
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                            <div class="text-right">                                           
                                <div class="col-md-12">                                                    
                                    <input type="submit" form="editform" name="submitedit" class="btn btn-primary">
                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                </div>                             
                            </div>
                        </div>

                    </form>

                </div>

            </div>

         </div>

    </div>
    <div id="subtract" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">

        <div class = "modal-dialog modal-lg">

            <div class = "modal-content">

                <div class = "modal-body">

                    <button class="close" data-dismiss="modal">&times;</button>

                    <h4> Add Quantity</h4>

                    <form action = "" id="reasonform" method="post" class="ajax">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label><i class = "ti-search"></i> Search</label>
                                    <input type="text" class="form-control border-input" placeholder="Enter the name of the item">

                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>WholeSale Price</th>
                                            <th>Retail Price</th>
                                            <th>Reason</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item 69</td>
                                                <td><div class="form-group">
                                                        <input type="number" form="reasonform" class="form-control" id="WholeSale">
                                                    </div>
                                                </td>
                                                <td>Php 150.00</td>
                                                <td>Php 175.00</td>
                                                <td><div class="form-group">
                                                        <textarea class="form-control" form="reasonform" rows="4" id="comment"></textarea>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                            <div class="text-right">                                           
                                <div class="col-md-12">                                                    
                                    <input type="submit" form="reasonform" name="submitedit" class="btn btn-primary">
                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                </div>                             
                            </div>
                        </div>

                    </form>

                </div>

            </div>

         </div>

    </div>
    <div id="return" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">

        <div class = "modal-dialog">

            <div class = "modal-content">

                <div class = "modal-body">

                    <button class="close" data-dismiss="modal">&times;</button>

                    <h4>Return of Item</h4>

                    <form id="returnform" action = "" method="post" class="ajax">

                        <div class="form-group">                                
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Customer Name:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control border-input" form="returnform" placeholder="Customer Name">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Item Purchased:</label>
                                </div>
                                <div class="col-md-9">
                                     <textarea class="form-control" form="returnform" rows="4" id="comment"></textarea>
                                     <div class="text-right">
                                        <button ><i class="ti-plus"></i></button>
                                     </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Quantity:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="returnform" class="form-control border-input">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Total price:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="returnform" class="form-control border-input">

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Reason:</label>                                            
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" form="returnform" rows="4" id="comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Status:</label>                                            
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" form="returnform" name="status">
                                </div>
                            </div>
                        </div>

                         
                        <div class="form-group">
                            <div class="row">
                                <div class="text-right">                                           
                                    <div class="col-md-12">                                                    
                                        <input type="submit" form="returnform" name="Save" value="Save" class="btn btn-primary">
                                        <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    </div>                             
                                </div>
                            </div>
                        </div>

                    
                       
                      
                    </form>

                </div>

            </div>

         </div>

    </div>
    <div id="remove" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">

        <div class = "modal-dialog modal-lg">

            <div class = "modal-content">

                <div class = "modal-body">

                    <button class="close" data-dismiss="modal">&times;</button>

                    <h4>Remove</h4>

                    <form action = "" id="removeform" method="post" class="ajax">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label><i class = "ti-search"></i> Search</label>
                                    <input type="text" class="form-control border-input" placeholder="Enter the name of the item">

                                </div>
                                <div class="content table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Description</th>
                                            <th>Quantity in Stock</th>
                                            <th>Quantity</th>
                                            <th>WholeSale Price</th>
                                            <th>Retail Price</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item 69</td>
                                                <td>50</td>
                                                <td><div class="form-group">
                                                        <input type="number" form="removeform" class="form-control" >
                                                    </div>
                                                </td>
                                                <td>Php 150.00</td>
                                                <td>Php 175.00</td>
                                                <td><button form="removeform"><span class="glyphicon glyphicon-remove"></span></button></td>
                                                
                                            </tr>
                                       
                                        </tbody>
                                    </table>

                                </div>
                               
                            </div>
                            <div class="text-right">                                           
                                <div class="col-md-12">                                                    
                                    <input type="submit" form="removeform" value="Save" class="btn btn-primary">
                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                </div>                             
                            </div>
                        </div>

                    </form>

                </div>

            </div>

         </div>

    </div>
@endsection

@section('js_link')
      <!--   Core JS Files   -->
      <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
@endsection