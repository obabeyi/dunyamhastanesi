@extends('admin.admin_master')

@section('content')
<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>
            Doktor Ekleme <span class="fw-300"><i>Alanı</i></span>
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
            <form class="was-validated" method="post" action="{{route('tibbikadro.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" class="form-control " name="image" id="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <img width="50%" src="{{url('image/no_news_image.png')}}" id="showImage" alt="">
                            {{-- <label>First name:</label>
                            <input type="text" placeholder="Eugene" class="form-control"> --}}
                        </div>                    </div>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Doktor İsmi</label>
                        <input type="text" name="isim" class="form-control" id="validationCustom01" placeholder="Doktor İsmi">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Doktorun aldığı eğitimler</label>
                        <input type="text" name="egitimler" class="form-control is-invalid" id="simpleinputInvalid" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Telefon</label>
                        <input type="text" name="telefon"  class="form-control is-invalid" placeholder="0555-000-00-00" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Mail Adresi</label>
                        <input type="email" name="mail" class="form-control is-invalid" id="simpleinputInvalid" required="">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Randevu Linki</label>
                        <input type="text" name="randevulink" class="form-control" id="validationCustom01" placeholder="Randevu alınacak linki giriniz">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Doktorun doğum yeri</label>
                        <input type="text" name="dogumyeri" class="form-control is-invalid" id="simpleinputInvalid" required="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Doğum Tarihi</label>
                        <input class="form-control" id="example-date" type="date" name="dogumtarihi" value="2023-07-23">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="simpleinputInvalid">Dr. Uzmanlık Alanı</label>
                        <input type="text" name="mail" class="form-control is-invalid" name="uzmanlikalani" id="simpleinputInvalid" placeholder="uzmanlık alanını virgülle ayırınız" required="">

                    </div>
                </div>
            </div>
            <div class="mt-3">

<button type="submit" class="btn btn-success">KAYDET</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
