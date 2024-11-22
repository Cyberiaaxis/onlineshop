@extends('layouts.master')
@section('title','Dashboard')
@section('style')
<link href="../../assets/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
<link href="../../assets/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="middle-content container-xxl p-0">
    <div class="card mt-5">
        <div class="card-header bg-white" style="font-weight:bold">Your Tickets</div>
        <div class="card-body" style="padding:0px 25px;">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40.png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($total_ticket>0){{$total_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Total Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (5).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($open_ticket>0){{$open_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Open Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (3).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($in_progress_ticket>0){{$in_progress_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">In Progress Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (1).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($on_hold_ticket>0){{$on_hold_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">On Hold Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (2).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($resolved_ticket>0){{$resolved_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Resolved Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (4).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($rejected_ticket>0){{$rejected_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Rejected Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header bg-white" style="font-weight:bold">Assigned Tickets</div>
        <div class="card-body" style="padding:0px 25px;">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40.png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_total_ticket>0){{$assigned_total_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Total Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (5).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_open_ticket>0){{$assigned_open_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Open Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (3).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_in_progress_ticket>0){{$assigned_in_progress_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">In Progress Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (1).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_on_hold_ticket>0){{$assigned_on_hold_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">On Hold Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (2).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_resolved_ticket>0){{$assigned_resolved_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Resolved Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading" style="padding-bottom: 10px;">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <img src="{{url('assets/src/icons/icons8-two-tickets-40 (4).png')}}">
                                        </div>
                                        <div class="">
                                            <p class="w-value">@if($assigned_rejected_ticket>0){{$assigned_rejected_ticket}} @else {{0}} @endif</p>
                                            <h5 class="">Rejected Ticket</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="../../assets/src/assets/js/dashboard/dash_1.js"></script>
@endsection