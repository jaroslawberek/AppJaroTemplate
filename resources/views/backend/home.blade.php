@extends('layouts.backend.admin')

@section('content')


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Posts
                <a href="https://demo.getcraftable.com/admin/posts/create" role="button" class="btn btn-primary btn-spinner btn-sm pull-right m-b-0"><i class="fa fa-plus"></i>&nbsp; New Post
                </a>
            </div>

            <div class="card-body">
                <form>
                    <div class="row justify-content-md-between">
                        <div class="col col-lg-7 col-xl-5 form-group">
                            <div class="input-group"><input placeholder="Search" class="form-control"> 
                                <span class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp; Search</button>
                                </span>
                            </div>
                        </div> 
                        <div class="col-sm-auto form-group ">
                            <select class="form-control">
                                <option value="10">10</option> 
                                <option value="25">25</option> 
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </form> 
                <div class="user-detail-tooltips-list">
                    
                </div>
                <table class="table table-hover table-listing">
                    <thead>
                        <tr>
                            <th class="bulk-checkbox">
                                <input id="enabled" type="checkbox" data-vv-name="enabled" name="enabled_fake_element" class="form-check-input" aria-required="false" aria-invalid="false"> 
                                <label for="enabled" class="form-check-label">
                                    #
                                </label>
                            </th> 
                            <th>
                                <a>
                                    <span class="fa fa-sort-amount-asc"></span> ID
                                </a>
                            </th> 
                            <th>
                                <a>
                                    <span class="fa"></span> Title
                                </a>
                            </th> 
                            <th class="text-center">
                                <a>
                                    <span class="fa"></span> Published at
                                </a>
                            </th> 
                            <th>
                                <a>
                                    <span class="fa"></span> Enabled
                                </a>
                            </th> 
                            <th>
                                <a>
                                    <span class="fa"></span> Last update
                                </a>
                            </th> 
                            <th></th>
                        </tr> 
                        <tr style="display: none;">
                            <td colspan="7" class="bg-bulk-info d-table-cell text-center">
                                <span class="align-middle font-weight-light text-dark">Selected items 0.  
                                    <a href="#" class="text-primary">
                                        <i class="fa"></i> Check all items 98
                                    </a> 
                                    <span class="text-primary">|</span> 
                                    <a href="#" class="text-primary">Uncheck all items</a>
                                </span> 
                                <span class="pull-right pr-2">
                                    <button class="btn btn-sm btn-danger pr-3 pl-3">Delete</button>
                                </span>
                            </td>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr class="">
                            <td class="bulk-checkbox">
                                <input id="enabled1" type="checkbox" data-vv-name="enabled1" name="enabled1_fake_element" class="form-check-input" aria-required="false" aria-invalid="false"> 
                                <label for="enabled1" class="form-check-label"></label>
                            </td> 
                            <td>1</td> 
                            <td>Saepe officia ab aut ipsa suscipit.</td> 
                            <td class="text-center text-nowrap">
                                <span>
                                    15.06.2021, 00:00
                                </span> <!----> <!----> <!----> 
                                <div>
                                    <div class="d-inline">
                                        <button type="submit" title="Unpublish now" class="btn btn-sm btn-danger">
                                            <i class="fa fa-sort-amount-asc"></i>
                                            &nbsp;&nbsp;Unpublish now
                                        </button>
                                    </div>
                                </div>
                            </td> 
                            <td>
                                <label class="switch switch-3d switch-success">
                                    <input type="checkbox" class="switch-input"> 
                                    <span class="switch-slider"></span>
                                </label>
                            </td> 
                            <td>
                                <div class="v-popover avatar-tooltip-trigger"><div aria-describedby="popover_oqqaxad7xb" class="trigger" style="display: inline-block;"><!----> 
                                        <div class="avatar-initials">
                                            AA
                                        </div> <div class="avatar-full-name">
                                            Administrator Administrator
                                            <!----></div> </div> 
                                </div>
                            </td> 
                            <td>
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <a href="https://demo.getcraftable.com/admin/articles/1/edit" title="Edit" role="button" class="btn btn-sm btn-spinner btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div> 
                                    <form class="col">
                                        <button type="submit" title="Delete" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                   
                    </tbody>
                </table> 
                <div class="row">
                    <div class="col-sm">
                        <span class="pagination-caption">Displaying items from 1 to 10 of total 98 items.</span>
                    </div> <div class="col-sm-auto">
                        <nav>
                            <ul class="pagination sizeClass">
                                <li class="disabled page-item"><span class="page-link">
                                        <span aria-hidden="true">«</span></span> <!---->
                                </li> 
                                <li class="active page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link">6</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">7</a>
                                </li> 
                                <li class="page-item"><!----> 
                                    <a href="#" aria-label="Next" class="page-link">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> <!---->
            </div>
        </div> 
    </div>
</div>



@endsection
