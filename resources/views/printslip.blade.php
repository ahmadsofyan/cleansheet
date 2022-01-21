<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>table</title>
<style>
.table-white{
      border: 1px solid black;
}
.borderno{
	border: none;
}
</style>
</head>
<body>
	<div class="container-fluid">
	<?php
	date_default_timezone_set('Asia/Jakarta');
	echo 'BULAN : ' . date('F , Y');
	?>
	<table class="table">
		<thead class="table-white">
		<tr>
			<td>Tanggal</td>
			<td>Keterangan</td>
			<td>Upah</td>
			<td>Makan</td>
			<td>Transport</td>
			<td>parkir</td>
		</tr>
		</thead>
        <?php
		 $jumlah = 0;
		 $jumlah1 = 0;
		 $jumlah2 = 0;
		 $jumlah3 = 0;
		 $jumlah4 = 0;
		 ?>
        @foreach($mitra as $view)
            @if ($view->user->id == Auth::user()->id) 
			<tr>
				<td class="borderno">{{date('d-m-y',strtotime($view->tanggal))}}</td>
				<td class="borderno">{{$view->jenis_pekerjaan}}</td>
				<td  class="borderno"  >Rp.{{$view->pembayaran}}</td>
				<td class="borderno" >Rp.{{$view->makan}}</td>
				<td class="borderno"  >Rp.{{$view->transport}}</td>
				<td class="borderno"  >Rp.{{$view->parkir}}</td>
				<?php $jumlah += $view['pembayaran']; ?>
				<?php $jumlah1 += $view['makan']; ?>
				<?php $jumlah2 += $view['transport']; ?>
				<?php $jumlah4 += $view['parkir']; ?>
				<?php $jumlah3 += $view['transport'] += $view['makan']+= $view['pembayaran']+= $view['parkir']; ?>
			</tr>
            @endif
            @endforeach
			
			
		

		<tfoot>
			<tr>
				
				<td class="borderno"  ></td>
				<td class="borderno"  ></td>
				<td class="borderno"  >Rp.<?php echo $jumlah ?></td>
				<td class="borderno"  >Rp.<?php echo $jumlah1 ?></td>
				<td class="borderno"  >Rp.<?php echo $jumlah2 ?></td>
				<td class="borderno"  >Rp.<?php echo $jumlah4 ?></td>
			</tr>
			<tr>
				<td class="borderno" colspan="2" align ="right" style="font-weight: bold; ">Total THP</td>
				<td class="borderno" style="font-weight: bold; ">Rp. </td>
				<td class="borderno"></td>
				<td class="borderno"></td>
				<td  class="borderno"style="font-weight: bold; "><?php echo $jumlah3 ?></td>
			</tr>
		</tfoot>
	</table>
	</div>
	<script type="text/javascript">
		window.print();
		</script>
</body>

</html>