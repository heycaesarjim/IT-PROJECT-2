@extends('layouts.navbar')
@section('dashboard_link')
  class="active"
@endsection
@section('right')
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

<i><p style="color:red;font-size:20px">Items under construction!</p></i>
<ul class="list-group-item-danger">
  <li>Add datatables for items</li>
  <li>Add graphs (top items, least items)</li>
</ul>


@endsection     