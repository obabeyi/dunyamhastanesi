@extends('admin.admin_master')

@section('content')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item">Datatables</li>
        <li class="breadcrumb-item active">Autofill</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-table'></i> DataTables: <span class='fw-300'>Autofill</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
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
                        <div class="panel-tag">
                            <p>The click-to-drag auto fill drag handle can be attached to the table cells using a number of different methods, depending on how you wish the end user to interact with your table. This option provides the ability to switch between the various options which are detailed below:</p>
                            <ul>
                                <li>
                                    <code>click</code> - Display when a cell is clicked upon
                                </li>
                                <li>
                                    <code>focus</code> - Display when a cell gains focus - for integration with KeyTable
                                </li>
                                <li>
                                    <code>hover</code> - Display when a cell is hovered over
                                </li>
                            </ul>
                        </div>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered  table-striped w-100">
                            <thead>
                                <a href="{{route('tibbikadro.create')}}"><button type="button" class="btn btn-success float-right">DOKTOR EKLE</button>

                                <tr>
                                    <th>NO</th>
                                    <th>Doktor İsmi</th>
                                    <th>Fotoğraf</th>
                                    <th>Egitimler</th>
                                    <th>Telefon</th>
                                    <th>kategori</th>
                                    <th>Tarih</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=0;
                                @endphp
                                @foreach ($tibbiKadro as $kadro )
                                @php
                                $i++;
                            @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$kadro->isim}}</td>
                                    <td></td>
                                    <td>{{$kadro->egitimler}}</td>
                                    <td>{{$kadro->telefon}}</td>
                                    <td>$320,800</td>
                                    <td>{{Carbon\Carbon::parse($kadro->created_at)->diffForHumans()}}</td>
                                    <td class="text-center"><a href="{{route('tibbikadro.update',$kadro->id)}}"><button type="button" class="btn btn-primary">Düzenle</button></a>
                                    </td>
                                    <td class="text-center"><a href="{{route('tibbikadro.destroy',$kadro->id)}}"><button type="button" class="btn btn-danger ">Sil</button></a></td>

                                </tr>
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>NO</th>
                                    <th>Doktor İsmi</th>
                                    <th>Fotoğraf</th>
                                    <th>Egitimler</th>
                                    <th>Telefon</th>
                                    <th>kategori</th>
                                    <th>Tarih</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
