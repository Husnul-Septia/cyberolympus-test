@extends('template.index')

@section('content')

<div>
    <form action="{{route('laporan.carilaporanlabaagent')}}" method="get">
         <div class="box-header">          
         </div>
           
        <button id="cari">Cari</button>
        <br>
        <div class="box-body">
         <div class="row">
              <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Laporan Jumlah Order ke Agen</h3>
                                </div>       
                                 <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                        <th>Nama Customer</th>
                                        <th>Nama Agent</th>
                                        <th>Jumlah Order</th>
                                        </tr>
                                      @foreach($data as $data)
                                        <tr>                                    
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->agent_name }}</td>
                                        <td>{{ $data->jlh}}</td>
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