// JavaScript Document
$(document).on('click', '#loginbut', function(e){
	var validator = $("#userlogin-form").data("bs.validator");
	validator.validate();
	 e.preventDefault();
 if (!validator.hasErrors()) 
  	{
		var $this = $(this);
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Authenticating Login...';
		if ($(this).html() !== loadingText) {
	    $this.data('original-text', $(this).html());
		$this.html(loadingText);}
	  	var password=$('#password').val();
		var userid=$('#userid').val();
		
		myformData='password='+password+'&userid='+userid;
		
	$.ajax({
		url: 'script/loginscript.php',
		type: 'POST',
		data: myformData,
		//cache: false,
		dataType: 'html',		
		success: function (logindata) {
			if(logindata=='valid')
			{	
				$('#lognotice').fadeIn(5000).html(' <div class="alert alert-success"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Login Successful</div>');
				 setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 500);
				window.location='dashboard.php';
				
			}
			else 
			{			
				
				$('#lognotice').fadeIn(5000).html('<div id="errornotice" class="alert alert-danger"><i class="now-ui-icons ui-1_simple-remove"></i>&nbsp;&nbsp;Invalid User Id or Password detected </div>');
				document.getElementById('password').value='';
				 setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
				
			}
		 
		},
		error: function(logindata){
			
				$('#lognotice').fadeIn(5000).html('<div id="errornotice" class="alert alert-danger"><i class="now-ui-icons ui-1_simple-remove"></i>&nbsp;&nbsp;Invalid Credientials Supplied; Parse Error</div>');
				document.getElementById('password').value='';	
				 setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
				 
			 }
	  });return false;  
	}
});

//loan App

$(document).on('click', '#applybut', function(e){
	var validator = $("#loan-form").data("bs.validator");
	validator.validate();
	 e.preventDefault();
 if (!validator.hasErrors()) 
  	{
		var $this = $(this);
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Processing Request...';
		if ($(this).html() !== loadingText) {
	    $this.data('original-text', $(this).html());
		$this.html(loadingText);}
		var formData = new FormData($('#loan-form')[0]);	
	$.ajax({
	url: "script/loanscript.php", 
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
		
		$("#message").fadeIn(200).html('<div class="alert alert-success"><span class="now-ui-icons ui-1_check"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$("#message").fadeOut(20000).html('<div class="alert alert-success"><span class="now-ui-icons ui-1_check"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$('#loan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
			
		
		}
		
		else
		{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$('#loan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		}	
		
		
	},
	error:function(responsendata)
	{
		
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#loan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
	}
});
return false;
		 }
		 else
		 {
		$("#message").fadeIn(200).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');
		$("#message").fadeOut(2000).html('<div class="alert alert-danger"><span class="now-ui-icons ui-1_simple-remove pull-left"></span>&nbsp;&nbsp;'+responsedata.message+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><br>');	
		$('#loan-form')[0].reset();
		setTimeout(function() {
					  $this.html($this.data('original-text'));
					}, 200);
		 
	}
});