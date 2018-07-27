<?php 
	$url = 'https://fcm.googleapis.com/fcm/send';

	$headers = array(
		'Content-Type : application/json',
		'Authorization : key=AAAAgLlu6eA:APA91bGBVtLtYfUw2SrkjBqqgjybBu9FQgD9UB8X5A9M1Sid4JtItB7IZeUWp5t9dWZG3qazdpSVMvQv31n3pp2RznGUoCkIkaxuwwDSuMR3toau-UWZ1zc7KAlUoJ3h6pGBpVP4ecRd'
	);

	$fields = array(
		'notification' => array(
			'body' => 'this is body',
			'title' => 'this is title'
		),
		'to' => 'cSISZUCZU1w:APA91bHHM8Mu_Fl0CiRtW9C3u1Bm3S2sp1KnvnrUaAe5Qf4pcfhGhW_4ib7JWw5kh0rmbYtzX-BalXbM4kbDDjzl70acz-BmeLa6L-vWaE37vOMx6rPNgyrNghSgkVEulwWQzJoFshtxplwWJk3VjkD3-d_WKiTLnA'
	);

	 $ch = curl_init ();
	 curl_setopt ( $ch, CURLOPT_URL, $url );
	 curl_setopt ( $ch, CURLOPT_POST, true );
	 curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
	 curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
	 curl_setopt ( $ch, CURLOPT_POSTFIELDS, json_encode($fields) );

	 $result = curl_exec ( $ch );
	 echo $result;
	 curl_close ( $ch );
?>