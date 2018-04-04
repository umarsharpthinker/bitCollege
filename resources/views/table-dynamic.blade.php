<head>
    <style>
        input focus{
            color: #000;
        }
    </style>
</head>
@extends('layouts.master')

@section('title')
    Apricot v 1.3
@stop

@section('content')


    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">





            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <span class="entypo-menu"></span>
                            <span>Table Dynamic
                            </span>
                        </h2>

                    </div>

                    <div class="col-sm-7">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="tittle-middle-header">

                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="tittle-alert entypo-info-circled"></span>
                                Welcome back,&nbsp;
                                <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                            </div>


                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="btn-group btn-wigdet pull-right visible-lg">
                            <div class="btn">
                                Widget</div>
                            <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-heart margin-iconic"></span>Favorite</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-cog margin-iconic"></span>Setting</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Table</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Table Dynamic</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">

                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->



            <div class="content-wrap">
                <div class="row">


                    <div class="col-sm-12">

                        <div class="nest" id="FootableClose">
                            <div class="title-alt">
                                <h6>
                                    Footable paginate</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#FootableClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Footable">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="Footable">

                                <p class="lead well">FooTable is a jQuery plugin that aims to make HTML tables on smaller devices look awesome - No matter how many columns of data you may have in them. And it's responsive i think this better than DataTable in some way</p>

                                <table class="table-striped footable-res footable metro-blue" data-page-size="6">
                                    <thead>
                                        <tr>
                                            <th>
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th data-hide="phone,tablet">
                                                Job Title
                                            </th>
                                            <th data-hide="phone,tablet">
                                                DOB
                                            </th>
                                            <th data-hide="phone">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td><a href="#">Boudreaux</a>
                                            </td>
                                            <td>Traffic Court Referee</td>
                                            <td data-value="78025368997">22 Jun 1972</td>
                                            <td data-value="1">
                                                <span class="status-metro status-active" title="Active">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td><a href="#">Airline Transport Pilot</a>
                                            </td>
                                            <td data-value="370961043292">3 Oct 1981</td>
                                            <td data-value="2">
                                                <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td data-value="-22133780420">19 Apr 1969</td>
                                            <td data-value="3">
                                                <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td data-value="250833505574">13 Dec 1977</td>
                                            <td data-value="1">
                                                <span class="status-metro status-active" title="Active">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td data-value="694116650726">30 Dec 1991</td>
                                            <td data-value="3">
                                                <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="#">Woldt</a>
                                            </td>
                                            <td><a href="#">Business Services Sales Representative</a>
                                            </td>
                                            <td data-value="561440464855">17 Oct 1987</td>
                                            <td data-value="2">
                                                <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td data-value="437400551390">11 Nov 1983</td>
                                            <td data-value="2">
                                                <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="#">Goodlow</a>
                                            </td>
                                            <td>Technical Services Librarian</td>
                                            <td data-value="-257733999319">1 Nov 1961</td>
                                            <td data-value="3">
                                                <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td data-value="362134712000">23 Jun 1981</td>
                                            <td data-value="1">
                                                <span class="status-metro status-active" title="Active">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td data-value="500874333932">15 Nov 1985</td>
                                            <td data-value="3">
                                                <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="pagination pagination-centered"></div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                        </div>


                    </div>

                </div>
            </div>










            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="FilteringClose">
                            <div class="title-alt">
                                <h6>
                                    Footable Filtering</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#FilteringClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Filtering">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="Filtering">

                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-sm-4">
                                        <input class="form-control" id="filter" placeholder="Search..." type="text" />
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="filter-status form-control">
                                            <option value="active">Active</option>
                                            <option value="disabled">Disabled</option>
                                            <option value="suspended">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">


                                        <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#pfaModal">Add Product</button>



                                    </div>

                                </div>
                                {{--<table id="footable-res2" class="demo" data-filter="#filter" data-filter-text-only="true">--}}
                                <table class="table-striped footable-res footable metro-blue demo" data-filter="#filter" data-filter-text-only="true" data-page-size="6">
                                    <thead>
                                    <tr>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th data-hide="phone,tablet">
                                            Job Title
                                        </th>
                                        <th data-hide="phone,tablet">
                                            DOB
                                        </th>
                                        <th data-hide="phone">
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Isidra</td>
                                        <td><a href="#">Boudreaux</a>
                                        </td>
                                        <td>Traffic Court Referee</td>
                                        <td data-value="78025368997">22 Jun 1972</td>
                                        <td data-value="1">
                                            <span class="status-metro status-active" title="Active">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shona</td>
                                        <td>Woldt</td>
                                        <td><a href="#">Airline Transport Pilot</a>
                                        </td>
                                        <td data-value="370961043292">3 Oct 1981</td>
                                        <td data-value="2">
                                            <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Granville</td>
                                        <td>Leonardo</td>
                                        <td>Business Services Sales Representative</td>
                                        <td data-value="-22133780420">19 Apr 1969</td>
                                        <td data-value="3">
                                            <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Easer</td>
                                        <td>Dragoo</td>
                                        <td>Drywall Stripper</td>
                                        <td data-value="250833505574">13 Dec 1977</td>
                                        <td data-value="1">
                                            <span class="status-metro status-active" title="Active">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maple</td>
                                        <td>Halladay</td>
                                        <td>Aviation Tactical Readiness Officer</td>
                                        <td data-value="694116650726">30 Dec 1991</td>
                                        <td data-value="3">
                                            <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maxine</td>
                                        <td><a href="#">Woldt</a>
                                        </td>
                                        <td><a href="#">Business Services Sales Representative</a>
                                        </td>
                                        <td data-value="561440464855">17 Oct 1987</td>
                                        <td data-value="2">
                                            <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lorraine</td>
                                        <td>Mcgaughy</td>
                                        <td>Hemodialysis Technician</td>
                                        <td data-value="437400551390">11 Nov 1983</td>
                                        <td data-value="2">
                                            <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lizzee</td>
                                        <td><a href="#">Goodlow</a>
                                        </td>
                                        <td>Technical Services Librarian</td>
                                        <td data-value="-257733999319">1 Nov 1961</td>
                                        <td data-value="3">
                                            <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Judi</td>
                                        <td>Badgett</td>
                                        <td>Electrical Lineworker</td>
                                        <td data-value="362134712000">23 Jun 1981</td>
                                        <td data-value="1">
                                            <span class="status-metro status-active" title="Active">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lauri</td>
                                        <td>Hyland</td>
                                        <td>Blackjack Supervisor</td>
                                        <td data-value="500874333932">15 Nov 1985</td>
                                        <td data-value="3">
                                            <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="5">
                                            <div class="pagination pagination-centered"></div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>


                                {{--<table id="footable-res2" class="demo" data-filter="#filter" data-filter-text-only="true">--}}
                                    {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th data-toggle="true">--}}
                                                {{--First Name--}}
                                            {{--</th>--}}
                                            {{--<th>--}}
                                                {{--Last Name--}}
                                            {{--</th>--}}
                                            {{--<th data-hide="phone,tablet">--}}
                                                {{--Job Title--}}
                                            {{--</th>--}}
                                            {{--<th data-hide="phone,tablet">--}}
                                                {{--DOB--}}
                                            {{--</th>--}}
                                            {{--<th data-hide="phone">--}}
                                                {{--Status--}}
                                            {{--</th>--}}
                                        {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                        {{--<tr>--}}
                                            {{--<td>Isidra</td>--}}
                                            {{--<td><a href="#">Boudreaux</a>--}}
                                            {{--</td>--}}
                                            {{--<td>Traffic Court Referee</td>--}}
                                            {{--<td data-value="78025368997">22 Jun 1972</td>--}}
                                            {{--<td data-value="1">--}}
                                                {{--<span class="status-metro status-active" title="Active">Active</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Shona</td>--}}
                                            {{--<td>Woldt</td>--}}
                                            {{--<td><a href="#">Airline Transport Pilot</a>--}}
                                            {{--</td>--}}
                                            {{--<td data-value="370961043292">3 Oct 1981</td>--}}
                                            {{--<td data-value="2">--}}
                                                {{--<span class="status-metro status-disabled" title="Disabled">Disabled</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Granville</td>--}}
                                            {{--<td>Leonardo</td>--}}
                                            {{--<td>Business Services Sales Representative</td>--}}
                                            {{--<td data-value="-22133780420">19 Apr 1969</td>--}}
                                            {{--<td data-value="3">--}}
                                                {{--<span class="status-metro status-suspended" title="Suspended">Suspended</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Easer</td>--}}
                                            {{--<td>Dragoo</td>--}}
                                            {{--<td>Drywall Stripper</td>--}}
                                            {{--<td data-value="250833505574">13 Dec 1977</td>--}}
                                            {{--<td data-value="1">--}}
                                                {{--<span class="status-metro status-active" title="Active">Active</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Maple</td>--}}
                                            {{--<td>Halladay</td>--}}
                                            {{--<td>Aviation Tactical Readiness Officer</td>--}}
                                            {{--<td data-value="694116650726">30 Dec 1991</td>--}}
                                            {{--<td data-value="3">--}}
                                                {{--<span class="status-metro status-suspended" title="Suspended">Suspended</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Maxine</td>--}}
                                            {{--<td><a href="#">Woldt</a>--}}
                                            {{--</td>--}}
                                            {{--<td><a href="#">Business Services Sales Representative</a>--}}
                                            {{--</td>--}}
                                            {{--<td data-value="561440464855">17 Oct 1987</td>--}}
                                            {{--<td data-value="2">--}}
                                                {{--<span class="status-metro status-disabled" title="Disabled">Disabled</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Lorraine</td>--}}
                                            {{--<td>Mcgaughy</td>--}}
                                            {{--<td>Hemodialysis Technician</td>--}}
                                            {{--<td data-value="437400551390">11 Nov 1983</td>--}}
                                            {{--<td data-value="2">--}}
                                                {{--<span class="status-metro status-disabled" title="Disabled">Disabled</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Lizzee</td>--}}
                                            {{--<td><a href="#">Goodlow</a>--}}
                                            {{--</td>--}}
                                            {{--<td>Technical Services Librarian</td>--}}
                                            {{--<td data-value="-257733999319">1 Nov 1961</td>--}}
                                            {{--<td data-value="3">--}}
                                                {{--<span class="status-metro status-suspended" title="Suspended">Suspended</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Judi</td>--}}
                                            {{--<td>Badgett</td>--}}
                                            {{--<td>Electrical Lineworker</td>--}}
                                            {{--<td data-value="362134712000">23 Jun 1981</td>--}}
                                            {{--<td data-value="1">--}}
                                                {{--<span class="status-metro status-active" title="Active">Active</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>Lauri</td>--}}
                                            {{--<td>Hyland</td>--}}
                                            {{--<td>Blackjack Supervisor</td>--}}
                                            {{--<td data-value="500874333932">15 Nov 1985</td>--}}
                                            {{--<td data-value="3">--}}
                                                {{--<span class="status-metro status-suspended" title="Suspended">Suspended</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                    {{--</tbody>--}}
                                {{--</table>--}}

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






    <script src="{{asset('tableDynamic')}}" type="text/javascript"></script>

@include('includes._formModal')

@endsection
