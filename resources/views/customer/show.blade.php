@extends('template.index')

@section('content')

<div>
	<form action="{{route('users.cari')}}" method="get">
		 <div class="box-header">          
	     </div>
	     <label> Jenis User</label>
	     <select name="users" id="users" class="form-control">
              <option value="3">Customers</option>   
              <option value="4">Agents</option>                
         </select>
          <button id="cari">Cari</button>
        <br>
	    <div class="box-body">
		 <div class="row">
			  <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Users</h3>
                                </div>       
                                 <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                        <th>Nama Awal</th>
										                    <th>Nama Akhir</th>
                                        </tr>
                                      @foreach($data as $data)
                                        <tr>
                                            <td>{{ $data->first_name }}</td>
										<td>{{ $data->last_name }}</td>
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