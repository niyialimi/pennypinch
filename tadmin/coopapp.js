// JavaScript Document

//addd new member
$(document).on('click', '#enrolmem', function(e){
	var validator = $("#member-form").data("bs.validator");
	validator.validate();
	 e.preventDefault();
 if (!validator.hasErrors()) 
  	{
		var $this = $(this);
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Adding New Member...';
		if ($(this).html() !== loadingText) {
	    $this.data('original-text', $(this).html());
		$this.html(loadingText);}
		var formData = new FormData($('#member-form')[0]);	
	$.ajax({
	url: "script/newregscript.php", 
	type: "POST",             
	data: formData, 
	contentType: false,       
	cache: false,   
	dataType: "JSON",          
	processData:false, 
	    
	success: function(responsedata)   
	{	
		if(responsedata.status=='success')
		{
		
		$("#message").fadeIn(200).html('<div class="alert alert-success"><span class="pe-7s-check pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$("#message").fadeOut(2000).html('<div class="alert alert-success"><span class="pe-7s-check pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$('#member-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
			
		
		}
		
		else
		{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$('#member-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		}	
		
		
	},
	error:function(responsendata)
	{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#member-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
	}
});
return false;
		 }
		 else
		 {
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#member-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		 
	}
});

//cretae loan

$(document).on('click', '#crtloanbut', function(e){
	var validator = $("#createloan-form").data("bs.validator");
	validator.validate();
	 e.preventDefault();
 if (!validator.hasErrors()) 
  	{
		var $this = $(this);
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Creating New Loan...';
		if ($(this).html() !== loadingText) {
	    $this.data('original-text', $(this).html());
		$this.html(loadingText);}
		var formData = new FormData($('#createloan-form')[0]);	
	$.ajax({
	url: "script/loancreatescript.php", 
	type: "POST",             
	data: formData, 
	contentType: false,       
	cache: false,   
	dataType: "JSON",          
	processData:false, 
	    
	success: function(responsedata)   
	{	
		if(responsedata.status=='success')
		{
		
		$("#message").fadeIn(200).html('<div class="alert alert-success"><span class="pe-7s-check pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$("#message").fadeOut(2000).html('<div class="alert alert-success"><span class="pe-7s-check pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$('#createloan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
			
		
		}
		
		else
		{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$('#createloan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		}	
		
		
	},
	error:function(responsendata)
	{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#createloan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
	}
});
return false;
		 }
		 else
		 {
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="pe-7s-close-circle pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#createloan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		 
	}
});