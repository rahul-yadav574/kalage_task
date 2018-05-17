document.getElementById('sign_in_form').addEventListener('submit',function(ev){
		ev.preventDefault();
		let user = $('#sign_in_user').val();
		let pass = $('#sign_in_password').val();
		
		let da = {};
		da.user = user;
		da.pass = pass;
		console.log(da);
	  $.post("sign_in.php", da,function(data, status){
			alert(data);
		});
	
});

document.getElementById('sign_up_form').addEventListener('submit',function(ev){
	ev.preventDefault();
	
		let handle = $('#handle').val();
		let phone = $('#phone').val();
		let email = $('#email').val();
	
		let f_name = $('#first_name').val();
		let l_name = $('#last_name').val();
		let pass = $('#password').val();
		
		let da = {};
		da.handle = handle;
		da.phone = phone;
		da.f_name = f_name;
		da.l_name = l_name;
		da.email = email;
		da.pass = pass;
	
	  $.post("sign_up.php", da,function(data, status){
			alert(data);
    });
	
});


$('.tab a,.links a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});