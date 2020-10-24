@extends('template.index')

@section('content')

<form action="{{route('users.store')}}" method="POST">
@csrf

 <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Create Users</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <div class="form-group">
                        <label>Referral ID</label>
                        <input id="referral" name="referral" type="text" class="form-control" placeholder="Referral"/>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat"/>
                    </div>                                       

                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input id="kel" name="kel" type="text" class="form-control" placeholder="Kelurahan"/>
                    </div>   

                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input id="kec" name="kec" type="text" class="form-control" placeholder="Kecamatan"/>
                    </div>   

                    <div class="form-group">
                        <label>Kota</label>
                        <input id="kota" name="kota" type="text" class="form-control" placeholder="Kota"/>
                    </div>

                    <div class="form-group">
                        <label>Provinsi</label>
                        <input id="prov" name="prov" type="text" class="form-control" placeholder="Provinsi"/>
                    </div>

                    <div class="form-group">
                        <label>No Rekening</label>
                        <input id="norek" name="norek" type="text" class="form-control" placeholder="No Rekening"/>
                    </div>

                    <br>
                  <input type="submit" value="Create" class="btn btn-primary">

                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->

@endsection