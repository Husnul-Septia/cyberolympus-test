@extends('template.index')

@section('content')

<div>
    <form action="{{route('laporan.carilaporanlabaagent')}}" method="get">
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
                                    <h3 class="box-title">Laporan Laba Agen</h3>
                                </div>       
                                 <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                        <th>Nama Agent</th>
                                        <th>Harga Jual</th>
                                        <th>Harga Agent</th>
                                        <th>Laba per Item</th>
                                        <th>Total Qty</th>
                                        <th>Laba Total</th>
                                        </tr>
                                      @foreach($data as $data)
                                        <tr>
                                        <td>{{ $data->agent_name }}</td>
                                                            <td>{{ $data->price_sell }}</td>
                                        <td>{{ $data->price_agent }}</td>
                                        <td>{{ $data->labaitem }}</td>
                                        <td>{{ $data->qty }}</td>
                                        <td>{{ $data->labatotal}}</td>
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