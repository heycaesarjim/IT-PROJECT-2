@extends('layouts.navbar')

@section('items_link')
       class="active"
@endsection

@extends('inc.headScripts')
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
                                            <ul class="nav nav-pills">
                                                    <li >
                                                       <a href = "#addquan" data-toggle="modal"   >Add</a>
                                                    </li>
                                                    <li >
                                                      <a href = "#subtract" data-toggle="modal" >Subtract </a>
                                                    </li>
                                                    <li >
                                                      <a href = "#return" data-toggle="modal"  >Return</a>
                                                    </li>                                                      
                                            </ul>
                                    </div>
                                          
                                    {{--  <div class="col-md-6">  --}}
                                        <div class = "text-right">
                                            <a href = "#addnew" data-toggle="modal" >
                                                <button type="submit" class="btn btn-info btn-fill btn-wd btn-success"><i class = "ti-plus"></i> Add new item</button> 
                                            </a>        
                                            <a href = "#remove" data-toggle="modal">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd btn-danger"><i class="ti-minus"></i> Remove item</button>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                                {{--  <div class="row">
                                    <div id="belowAddNewItem" class="col-lg-10" style="display:none">

                                    </div>      
                                </div>  --}}
                                <table id="tableItems" class="table table-hover table-condensed" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  </table>
                            </div>    
                        </div>
<br>
                        
                   


                    </div>
                </div>
            </div>
        </div>
        {{--  @if(count($products) > 1)
        @foreach ($products as $product)
                <div class="well">
                        <h3>{{$product->description}}</h3>
                </div>
        @endforeach
        @else
                <h5>No items</h5>
        @endif  --}}
    </div>

@endsection

@section('jqueryScript')
    <script type="text/javascript">
        $(document).ready(function() {
          
            $('#tableItems').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":  "{{ route('items.getItems') }}",
                "columns": [
                    {data: 'description'},
                    {data: 'price'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                ]
            });

        });
    </script>
@endsection

@section('modals')
    <div id="addnew" class="modal fade" tabindex="-1" role = "dialog" aria-labelledby = "viewLabel" aria-hidden="true">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-body">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4>Add New Item</h4>
                            {!! Form::open(['action'=>'ItemsController@store', 'method'=>'post']) !!}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            {{Form::label('description', 'Description:')}}
                                        </div>
                                        <div class="col-md-9">
                                            {{Form::text('description','',['class'=>'form-control','placeholder'=>'Description'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">                                
                                    <div class="row">
                                        <div class="col-md-3">
                                            {{Form::label('Quantity in stock:')}}
                                        </div>
                                        <div class="col-md-9">
                                            {{ Form::number('quantityInStock','',['class'=>'form-control','placeholder'=>'quantity','min'=>'1']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <div class="row">
                                        <div class="col-md-3">
                                            {{Form::label('Whole Sale Price', 'Whole Sale Price:')}}
                                        </div>
                                        <div class="col-md-9">
                                            {{Form::number('wholeSalePrice','',['class'=>'form-control','placeholder'=>'Whole Sale Price','min'=>'1'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">   
                                    <div class="row">
                                        <div class="col-md-3">                                                             
                                            {{Form::label('Retail Price', 'Retail Price:')}}
                                        </div>
                                        <div class="col-md-9">                                    
                                            {{Form::number('retailPrice','',['class'=>'form-control','placeholder'=>'Retail Price','min'=>'1'])}}
                                        </div>
                                    </div>
                                </div>
                                @include('inc.messages')
                                <div class="form-group">
                                        <div class="row">
                                            <div class="text-right">                                           
                                                <div class="col-md-12">   
                                                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                    </div>
                                 </div>
                             {!! Form::close() !!}
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
                        <label><i class = "ti-search"></i> Search</label>
                        <input type="text" onkeyup="searchItem2(this)" id="addQuantity" class="form-control border-input" placeholder="Enter the name of the item">
                        <div class="table-responsive">
                            {{--  <table class="table table-bordered" id="itemsTable">
                                    <tr>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                     @foreach ($products as $product)
                                         <tr>
                                            <td> {{$product->description}} </td>
                                            <td> {{$product->price}} </td>
                                         </tr>
                                     @endforeach
                                     
                                    </table>
                                    {{$products->links()}}  --}}
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Id</td>
                                                <td>Description</td>
                                                <td>Quantity in stock</td>
                                                <td>Quantity</td>
                                                <td>Whole sale price</td>
                                                <td>Retail Price</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody  id="addQuantityTbody">

                                        </tbody>
                                    </table>
                          </div>
                       
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
                    <h4> Subtract Quantity</h4>
                    <label><i class = "ti-search"></i> Search</label>
                    <input type="text" onkeyup="searchItem2(this)" id="subtractQuantity" class="form-control border-input" placeholder="Enter the name of the item">
                    <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Description</td>
                                            <td>Quantity in stock</td>
                                            <td>Quantity</td>
                                            <td>Whole sale price</td>
                                            <td>Retail Price</td>
                                            <td>Reason</td>
                                        </tr>
                                    </thead>
                                    <tbody  id="subtractQuantityTbody">

                                    </tbody>
                                </table>
                      </div>

                </div>
                <div class="modal-footer" id="mod_footer">

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
                        <div class="row">
                            <div class="col-md-3">
                                    <label><i class = "ti-search"></i> Search</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" onkeyup="searchItem2(this)" id="returnItem" class="form-control border-input" placeholder="Name of the returned item">
                            </div>
                        </div>
                                    <table class="table">
                                        <thead>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>Quantity</td>
                                                    <td>Action</td>
                                                </tr>
                                        </thead>
                                        <tbody  id="returnItemTbody">
                                        </tbody>
                                    </table>

                        <div id="returnFormDiv" style="display:none">
                            <div class="row">
                                    <div class="col-md-3">
                                        <label>Customer Name:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control border-input" form="returnform" placeholder="Customer Name">
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-3">
                                        <label>Item:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="returnItemName" type="text" class="form-control border-input" disabled>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Quantity:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="returnform" class="form-control border-input" min="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Total price:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" form="returnform" class="form-control border-input" min="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Reason:</label>                                            
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" form="returnform" rows="4" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Status:</label>                                            
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" form="returnform" name="status">
                                </div>
                            </div>

                            <div class="row">
                                <div class="text-right">                                           
                                    <div class="col-md-12">                                                    
                                        <input type="submit" name="Save" onclick="window.alert('to be continue..')" value="Save" class="btn btn-primary">
                                        <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    </div>                             
                                </div>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label><i class = "ti-search"></i> Search</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" onkeyup="searchItem2(this)" id="removeItem" class="form-control border-input" placeholder="Name of the returned item">
                                </div>
                            </div>
                        </div>
                        <div class="content table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>Id</th>
                                    <th>Description</th>
                                    <th>Quantity in Stock</th>
                                    <th>WholeSale Price</th>
                                    <th>Retail Price</th>
                                    <th>Action</th>
                                </thead>
                                <tbody id="removeItemTbody">
                                </tbody>
                            </table>
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