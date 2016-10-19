<?if(isset($siswa)):?>
	<?=Form::hidden('id',$siswa->id)?>
<?endif?>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('nisn'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('nisn', 'NISN:',['class'=>'control-label']) ?>
		<?if($errors->has('nisn')):?><span class="help-block"><?='*'.$errors->first('nisn');?></span><?endif?>
		<?= Form::text('nisn',null,['class'=>'form-control']) ?>
	</div>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('nama_siswa'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('nama_siswa', 'NAMA:',['class'=>'control-label']) ?>
		<?if($errors->has('nama_siswa')):?><span class="help-block"><?='*'.$errors->first('nama_siswa');?></span><?endif?>
		<?= Form::text('nama_siswa',null,['class'=>'form-control']) ?>
	</div>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('tanggal_lahir'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('tanggal_lahir', 'Tgl Lahir:',['class'=>'control-label']) ?>
		<?if($errors->has('tanggal_lahir')):?><span class="help-block"><?='*'.$errors->first('tanggal_lahir');?></span><?endif?>
		<?= Form::date('tanggal_lahir', !empty($siswa)?$siswa->tanggal_lahir->format('Y-m-d') :null, ['class'=> 'form-control', 'id' => 'tanggal_lahir']) ?>
	</div>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('jenis_kelamin'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('jenis_kelamin', 'Jenis Kelamin:',['class'=>'control-label']) ?>
		<?if($errors->has('jenis_kelamin')):?><span class="help-block"><?='*'.$errors->first('jenis_kelamin');?></span><?endif?>
		<div class="radio">
			<label><?= Form::radio('jenis_kelamin', 'L') ?>Laki-laki</label>
		</div>
		<div class="radio">
			<label><?= Form::radio('jenis_kelamin', 'P') ?>Perempuan</label>
		</div>
	</div>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('nomor_telepon'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('nomor_telepon', 'Telepon:',['class'=>'control-label']) ?>
		<?if($errors->has('nomor_telepon')):?><span class="help-block"><?='*'.$errors->first('nomor_telepon');?></span><?endif?>
		<?= Form::text('nomor_telepon',null,['class'=>'form-control']) ?>
	</div>
<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('id_kelas'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('id_kelas', 'Kelas:',['class'=>'control-label']) ?> <sup><a href="../kelas">List</a></sup>
		<?if($errors->has('id_kelas')):?>
			<span class="help-block"><?='*'.$errors->first('id_kelas');?></span>
		<?endif?>
		<?if(count($list_kelas)>0):?>
			<?= Form::select('id_kelas',$list_kelas,null,['class'=>'form-control','id'=>'id_kelas','placeholder'=>'pilih kelas']) ?>
		<?else:?>
			<p>Tidak ada pilihan kelas. <a href="../kelas/create">add</a></p>
		<?endif?>
	</div>

<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('hobi'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('hobi', 'Hobi:',['class'=>'control-label']) ?>
		<?if($errors->has('hobi')):?>
			<span class="help-block"><?='*'.$errors->first('hobi');?></span>
		<?endif?>
		<?if(count($list_hobi)>0):?>
			<?foreach($list_hobi as $key=>$value):?>
				<div class="checkbox">
					<label>
						<?=Form::checkbox('hobi[]',$key,null) ?>
						<?=$value?>
					</label>
				</div>
			<?endforeach?>
		<?else:?>
			<p>Tidak ada pilihan kelas. <a href="../kelas/create">add</a></p>
		<?endif?>
	</div>

<?if($errors->any()):?>
	<div class="form-group <?=($errors->has('foto'))?'has-error':'has-success'?>">
<?else:?>
	<div class="form-group">
<?endif?>
		<?= Form::label('foto', 'Foto:',['class'=>'control-label']) ?>
		<?if($errors->has('foto')):?>
			<span class="help-block"><?='*'.$errors->first('foto');?></span>
		<?endif?>
		<?= Form::file('foto') ?>
	</div>

	<div class="form-group">
		<?= Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) ?>
	</div>
