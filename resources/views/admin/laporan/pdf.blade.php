
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
    <center>
        <h3>LAPORAN PENGADUAN</b></h3>
        {{ $dari }} - {{ $ke }}
        <br><br>
        <hr>
    </center>
    <br>
    <span><b> Jumlah pengaduan masuk</b> : {{ $hitungtp }}</span>
    <br><hr>
    <br>
    <span><b> Jumlah tanggapan masuk</b> : {{ $hitungtg }}</span>
    <br><hr>
    <br>
    <span><b> Jumlah pengaduan yang belum diproses</b> : {{ $terkirim }}</span>
    <br><hr>
    <br>
    <span><b> Jumlah pengaduan yang sedang diproses</b> : {{ $proses }}</span>
    <br><hr>
    <br>
    <span><b> Jumlah masyarakat</b> : {{ $masyarakat }}</span>
    <br><br>
    <span><b> Jumlah petugas</b> : {{ $petugas }}</span>
    
	
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Padaherang , <?= date('d/m/y') ?> <br/>
                {{ Auth::guard('admin')->user()->nama_petugas }},
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>
</body>
</html>