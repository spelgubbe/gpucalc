Calculate GPU single precision floating point performance:
<form class="gpustats" action="" method='POST'>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">GPU Core Clock</span>
		<input type="text" name="core_clock" class="form-control" placeholder="" aria-describedby="basic-addon1" autocomplete="off">
	</div><br>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Shaders</span>
		<input type="text" name="shaders" class="form-control" placeholder="" aria-describedby="basic-addon1" autocomplete="off">
	</div><br>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Instructions per Clock</span>
		<input type="text" name="actions_per_clock" class="form-control" placeholder="" value="2" aria-describedby="basic-addon1" autocomplete="off">
	</div><br>
	<div class="form-group row">
		<label class="col-sm-2">Unit</label>
		<div class="col-sm-10"> 
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios1" value="MFLOPS">MFLOPS</label>
			</div>
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios2" value="GFLOPS" checked>GFLOPS</label>
			</div>
			<div class="radio">
				<label>
				<input type="radio" name="unit" id="gridRadios3" value="TFLOPS">TFLOPS</label>
			</div>
		</div>
	</div><br>
	<input type="submit" value="Calc">
</form>
<div id="result">
</div>