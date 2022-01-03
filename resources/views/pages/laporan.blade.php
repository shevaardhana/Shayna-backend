<html>
<head>
	<title>Laporan Penjualan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor</th>
                <th>alamat</th>
                <th>Total Transaksi</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp

                @foreach ($items as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->number}}</td>
                    <td>{{$item->address}}</td>
                    <td>total</td>
                    <td>{{ $item->transaction_status }}</td>

                </tr>
                @endforeach
		</tbody>
	</table>

</body>
</html>
