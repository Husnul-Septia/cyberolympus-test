@extends('template.index')

@section('content')

<div>
    <form action="{{route('laporan.carilaporanitemproduk')}}" method="get">
         <div class="box-header">          
         </div>
           
        <div class="form-group">
            <label>Tgl Awal</label>
            <input id="awal" name="awal" type="text" class="form-control" />
        </div>

        <div class="form-group">
            <label>Tgl Akhir</label>
            <input id="akhir" name="akhir" type="text" class="form-control" />
        </div>

        <button id="cari">Cari</button>
        <br>
        <div class="box-body">
         <div class="row">
              <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Laporan Item Produk</h3>
                                </div>       
                                 <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                        <th>Nama Produk</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        </tr>
                                      @foreach($data as $data)
                                        <tr>                                       
                                        <td>{{ $data->product_name}}</td>
                                        <td>{{ $data->qty }}</td>
                                        <td>{{ $data->price}}</td>
                                        <td>{{ $data->total}}</td>
                                        </tr>  
                                       @endforeach                                    
                                    </table>
                                </div><!-- /.box-body -->
                                    </div>                            
                        </div>
        </div>
        </div>
    </form>
</div>

@endsection