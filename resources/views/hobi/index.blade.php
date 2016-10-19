@extends('template')

@section('main')
<div id="hobi">
	<h2>Hobi</h2>
	@include('_partial.flash_message')

	<?if(count($hobi_list)>0): ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<td>No</td>
					<td>Hobi</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<? $i=1 ?>
				<?foreach($hobi_list as $kls):?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$kls->nama_hobi?></td>
						<td>
							<div class="box-button">
								<?= link_to('hobi/'.$kls->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) ?>
							</div>
							<div class="box-button">
								<?=Form::open(["method"=>"DELETE", 'action'=>['HobiController@destroy',$kls->id]])?>
									<?=Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])?>
								<?=Form::close()?>
							</div>
						</td>
					</tr>
				<?endforeach?>
			</tbody>
		</table>
	<?else: ?>
		<p>Tidak ada data hobi</p>
	<?endif ?>

		<div class="tombol-nav">
			<a href="hobi/create" class="btn btn-primary">Tambah hobi</a>
		</div>
</div>
@stop


@section('footer')
	@include('footer')
@stop
