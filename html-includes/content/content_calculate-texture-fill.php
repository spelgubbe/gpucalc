Calculate Texture Fillrate of GPU:
<form class="gpustats" action="" method='POST'>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">GPU Core Clock</span>
		<input type="text" name="core_clock" class="form-control" placeholder="" aria-describedby="basic-addon1" autocomplete="off">
	</div><br>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Texture Mapping Units (TMUs)</span>
		<input type="text" name="texture_mapping_units" class="form-control" placeholder="" aria-describedby="basic-addon1" autocomplete="off">
	</div><br>
	<div class="form-group row">
		<label class="col-sm-2">Unit</label>
		<div class="col-sm-10"> 
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios1" value="MTexel/s">MTexel/s</label>
			</div>
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios2" value="GTexel/s" checked>GTexel/s</label>
			</div>
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios3" value="TTexel/s">TTexel/s</label>
			</div>
		</div>
	</div><br>
	<input type="submit" value="Calc">
</form>
<div id="result">
</div>