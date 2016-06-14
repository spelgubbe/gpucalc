$(document).ready(function(){
	function updateResult(form){
		var outputdiv = $('#result');
		outputdiv.load('calc/tfill.php', form.serializeArray(), function(){
			/* Function to run after loading data into element. Maybe not needed yet */
			//outputdiv.scrollTop(function(){ return this.scrollHeight}); // scroll to output
		});
	}
	$(document).on('submit', 'form.gpustats', function(e){
		e.preventDefault();
		updateResult($(this));
	});

});