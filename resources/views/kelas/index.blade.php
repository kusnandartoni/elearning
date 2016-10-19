@extends('template')

@section('main')
<div id="kelas">
	<h2>Kelas</h2>
	@include('_partial.flash_message')

	<?if(count($kelas_list)>0): ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<td>No</td>
					<td>Kelas</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<? $i=1 ?>
				<?foreach($kelas_list as $kls):?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$kls->nama_kelas?></td>
						<td>
							<div class="box-button">
								<?= link_to('kelas/'.$kls->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) ?>
							</div>
							<div class="box-button">
								<?=Form::open(["method"=>"DELETE", 'action'=>['KelasController@destroy',$kls->id]])?>
									<?=Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])?>
								<?=Form::close()?>
							</div>
						</td>
					</tr>
				<?endforeach?>
			</tbody>
		</table>
	<?else: ?>
		<p>Tidak ada data kelas</p>
	<?endif ?>

		<div class="tombol-nav">
			<a href="kelas/create" class="btn btn-primary">Tambah kelas</a>
		</div>
</div>
@stop


@section('footer')
	@include('footer')
@stop