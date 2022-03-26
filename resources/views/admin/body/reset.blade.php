@extends('admin.admin_master')

@section('content')
<div class="panel-container show">
    <div class="panel-content">
        <div class="panel-tag">
            Be sure to use an appropriate type attribute on all inputs (e.g., code <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="">

                        <div class="form-group">
                <label class="form-label" for="simpleinput">Email</label>
                <input id="simpleinput" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus >
            </div>
            <div class="form-group">
                <label class="form-label" for="example-email-2">Password</label>
                <input type="password" id="example-email-2"  name="password" required autocomplete="new-password" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="form-label" for="example-email-2">Password</label>
                <input type="password" id="example-email-2" name="password_confirmation" required autocomplete="new-password"  class="form-control" placeholder="Email">
            </div>
            <div class="col-lg-3 pl-lg-1 my-2 float-right">
                <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure login</button>
            </div>
        </form>
    </div>
</div>
@endsection

