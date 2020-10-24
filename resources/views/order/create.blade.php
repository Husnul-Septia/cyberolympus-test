@extends('template.index')

@section('content')

<form action="{{route('orders.store')}}" method="POST">
@csrf

 <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Order Products</h3>
            </div>
            <div class="box-body">
                <form role="form">                
                    <div class="form-group">
                        <label>Nama Customer</label>
                         <select name="customer" id="customer" class="form-control">
                          @foreach($customers as $customers)
                             <option value="{{$customers->id}}">{{$customers->nama}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Agent</label>
                         <select name="agent" id="agent" class="form-control">
                          @foreach($agents as $agents)
                             <option value="{{$agents->id}}">{{$agents->nama}}</option>
                           @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="box">
                    {{-- <div class="box-header"> --}}
                        <h3 class="box-title">Details</h3>
                    {{-- </div> --}}
                    <a href="#formsearch" id="btnProduk" onclick="cariProduk('Cari Produk');" class="btn btn-danger" data-toggle="modal" style="margin:0px 2px 2px 0px;">Produk</a>

                      <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Produk</th>
                                            <th>Category</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                    </div>
                    </div>
                    <br>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
@include('template.partials.searchModal')

<script type="text/javascript">
  
  function cariProduk(header){

    document.getElementById('searchmodal_Title').innerHTML = header;

    document.getElementById('searchmodal_Textsearch').innerHTML = '<input type="text" id="keytrf" class="form-control pull-right" onkeyup="dataProduk(this.value)" placeholder="Nama Produk">';

    document.getElementById('searchmodal_Btnpilih').innerHTML = '<button type="button" class="btn btn-success" data-dismiss="modal" onclick="chooseTarifrad()">Pilih</button><button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>';

    var keyword = $('#keytrf').val();

    dataProduk(keyword);
    }

  function dataProduk(keyword){
  $.get('/ajax-dataproduk?key='+keyword, function(data){
    var isi = '';
    var nomorrm = '';

    isi += '<table id="datatable1" class="responstable">';
    isi += '<thead>';
    isi += '<tr>';
    isi += '<th width="30px"></th>';
    isi += '<th width="100px">Tarif Kode</th>';
    isi += '<th width="100%">Tarif Nama</th>';
    isi += '</tr>';
    isi += '</thead>';
    isi += '<tbody>';

    var i = 0;

    arrTarifRad = [];

    $.each(data, function(index, trfradObj){

      arrTarifRad.push({
            tarifkode     : trfradObj.TTarifRad_Kode,
            tarifnama     : trfradObj.TTarifRad_Nama,
            tarif       : parseFloat(trfradObj.TTarifRad_Jalan).toFixed(2),
            tarifdokterpt   : parseFloat(trfradObj.TTarifRad_DokterPT).toFixed(2),
            tarifdokterft   : parseFloat(trfradObj.TTarifRad_DokterFT).toFixed(2),
            tarifrspt     : parseFloat(trfradObj.TTarifRad_RSPT).toFixed(2),
            tarifrsft     : parseFloat(trfradObj.TTarifRad_RSFT).toFixed(2),
            tarifjenis    : trfradObj.TTarifVar_Kelompok
          });

      isi += '<tr class="even pointer">';
      isi += '<td><input type="radio" id="daftarjalan" name="daftarjalan" onclick="sendArrRad('+i+')"></td>';
      isi += '<td>'+trfradObj.TTarifRad_Kode+'</td>';
      isi += '<td style="text-align:left;">'+trfradObj.TTarifRad_Nama+'</td>';
      isi += '<td style="text-align:right;">'+formatRibuan(parseFloat(trfradObj.TTarifRad_Jalan).toFixed(2))+'</td>';
      isi += '</tr>';

      i++;
    });

    isi += '</tbody>';
    isi += '</table>';

    document.getElementById('hasil').innerHTML = isi;
  });

}

  function refreshTableTrans(){
      var refreshtable1 = '';
      // var unitKode = $('#unit_kode').val();

      refreshtable1 += '<table class="responstable">'
                    +'<tr>'
                      +'<th width="30px"></th>'
                      +'<th width="100px">Produk</th>'
                      +'<th width="100%">Kategori</th>'
                      +'<th width="100px">Qty</th>'
                      +'<th width="100%">Harga</th>'
                      +'<th width="100px">Total</th>'
                    +'</tr>';

      var i = 0;
      $.each(arrItem, function (index, value) {
       
          refreshtable1 += '<tr>'                           
                            +'<td);"><input type="text" id="tdAsuransi'+i+'" value="'+formatRibuan(value.asuransi)+'" class="form-control"></td>'
                            +'<td onchange="changePribadi('+i+');"><input type="text" id="tdPribadi'+i+'" value="'+formatRibuan(value.pribadi)+'" class="form-control"></td>'
                          +'</tr>';
          i++;
      });

      document.getElementById('arrItem').value = JSON.stringify(arrItem);

      refreshtable1 += '</table>';
      document.getElementById('tablebody1').innerHTML = refreshtable1;

      hitungTotal();
</script>
@endsection