<?php

	Route::get('/ajax-datausers', function(){

		$key1 	= Request::get('key1');

		// if ($key1== 3) {
			$users  = DB::table('users as U')
							// ->leftJoin('users AS U', 'U.id', '=', 'C.id')
							// ->select('U.first_name', 'U.last_name','C.address','C.kelurahan','C.kecamatan','C.provinsi')
		                    ->where('U.account_type', '=', $key1)
		                    ->get();
		// }elseif ($key1== 4) {
		// 	$users  = DB::table('agent as A')
		// 					->leftJoin('users AS U', 'U.id', '=', 'A.id')
		// 					->select('U.first_name', 'U.last_name','A.address','A.kelurahan','A.kecamatan','A.provinsi')
		//                     ->where('U.account_type', '=', $key1)
		//                     ->get();
		// }

		return Response::json($users); 
	});