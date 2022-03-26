@extends('admin.admin_master')

@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item">Datatables</li>
        <li class="breadcrumb-item active">Responsive</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-table'></i> DataTables: <span class='fw-300'>Responsive</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
            <small>
                Create headache free searching, sorting and pagination tables without any complex configuration
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Example <span class="fw-300"><i>Table</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Başlık</th>
                                    <th>Foto</th>
                                    <th>Unvan</th>
                                    <th>Tarih</th>
                                    <th>Agent</th>
                                    <th>Company</th>
                                    <th>OrganizationID</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Shipping.Date</th>
                                    <th>Delivery.Date</th>
                                    <th>Payment.Date</th>
                                    <th>Timezone</th>
                                    <th>Payment</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Admin Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>298728508</td>
                                    <td>Samuel A. Townsend</td>
                                    <td>Ap #376-4611 Et St.</td>
                                    <td>Togo</td>
                                    <td>Monceau-sur-Sambre</td>
                                    <td>Dorian Mcintyre</td>
                                    <td>Gravida Molestie PC</td>
                                    <td>00439892299</td>
                                    <td>17.61388</td>
                                    <td>96.86623</td>
                                    <td>2019-10-06 21:27:12</td>
                                    <td>30/05/18</td>
                                    <td>2019-04-19 09:08:30</td>
                                    <td>PDT</td>
                                    <td>$36158.32</td>
                                    <td>euismod.mauris.eu@purusactellus.com</td>
                                    <td>511-7454</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                {{-- <tr>
                                    <th>OrderID</th>
                                    <th>Recipient</th>
                                    <th>Shipping.Address</th>
                                    <th>Shipping.Country</th>
                                    <th>Shipping.City</th>
                                    <th>Agent</th>
                                    <th>Company</th>
                                    <th>OrganizationID</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Shipping.Date</th>
                                    <th>Delivery.Date</th>
                                    <th>Payment.Date</th>
                                    <th>Timezone</th>
                                    <th>Payment</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Admin Controls</th>
                                </tr> --}}
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
