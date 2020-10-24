@extends('template.index')

@section('content')

<div>
	<form action="" method="post">
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
                                    <h3 class="box-title">Data Products</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Customer</th>
                                            <th>Agent</th>
                                            <th>Jumlah Item</th>
                                            <th>Jumlah Qty</th>
                                        </tr>
                                      @foreach($data as $order)
                                        <tr>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->agent_name }}</td>
                                            <td>{{ $order->jlh }}</td>
                                            <td>{{ $order->qty }}</td>
                                        </tr>  
                                       @endforeach                                    
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                        <li><a href="#">&laquo;</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.box -->
              </div>
		</div>
		</div>
	</form>
</div>

@endsection