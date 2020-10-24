@extends('template.index')

@section('content')

<div>
	<form action="" method="post">
		 <div class="box-header">          
	     </div>
	   
        <br>
	    <div class="box-body">
		 <div class="row">
			  <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">LAPORAN 10 TOP CUSTOMER</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Customer</th>
                                            <th>Jumlah Qty</th>
                                        </tr>
                                      @foreach($data as $order)
                                        <tr>
                                            <td>{{ $order->name }}</td>
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

<!-- JQuery 1 -->

<script src="{{ asset('js/jquery.min.js') }}"></script>

<script type="text/javascript">
 $(function () {
      refreshData();
          
      });
	 $( document ).ready(function() {
        refreshData();
  	});

	$('#users').on('change', function(e){
         refreshData();
  	}); 

  	function refreshData(){
  	alert('tet');
          var isiData = '';
          var key1  = $('#users').val();

          isiData += '<table>';

          isiData += '<tr>'
                  +'<th class="column-title" width="100%">#</th>'
                  +'<th class="column-title" width="100%">Nama</th>'
                  +'<th class="column-title" width="100%">Alamat</th>'
                  +'<th class="column-title" width="100%">Email</th>'
                +'</tr>';

          $.get('/ajax-datausers?key1='+key1, function(data){
          console.log(data);
        if(data.length > 0){
            var i = 1;

          $.each(data, function(index, Listcustomer){
                       Listcustomer.id;
                isiData += '<tr>'
                      +'<td class="" width="10%">'++'</td>'
                          +'<td class="" >'+Listcustomer.id+'</td>'
                          +'<td class="" >'+Listcustomer.first_name+'</td>'
                          +'<td class="" >'+Listcustomer.last_name+'</td>'
                          +'<td class="" >'+Listcustomer.email+'</td>'
                      +'</tr>';
                }); 
            isiData += '</table>';
            document.getElementById('tablebody1').innerHTML = isiData;
            }else{

              isiData += '<tr><td colspan="4"><i>Tidak ada Data Ditemukan</i></td></tr>';
              isiData += '<table>';
              document.getElementById('tablebody1').innerHTML = isiData;
            }     
          });
        }
</script>
@endsection