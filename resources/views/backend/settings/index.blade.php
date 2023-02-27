@extends('backend.layout')

@section('content')
<section class="content-header">
      <!-- <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Settings</h3>
        </div>
        <div class="box-body">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>Açıklama</th>
                    <th>İçerik</th>
                    <th>Anahtar Değer</th>
                    <th></th>
                </tr>
                <tbody>
                    <tr>
                    <td>Açıklama</td>
                    <td>İçerik</td>
                    <td>Anahtar Değer</td>
                    <td>Button</td>
                    </tr>
                </tbody>
            </thead>
          </table>
        </div>
      </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection