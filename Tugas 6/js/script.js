$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="jenjang[]" placeholder="Jenjang" class="form-control name_list" /></td><td><input type="text" name="jurusan[]" placeholder="Jurusan" class="form-control name_list" /></td><td><input type="number" name="tahun1[]" placeholder="Tahun Masuk" class="form-control name_list" /></td><td><input type="number" name="tahun2[]" placeholder="Tahun Lulus" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"insert.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
   
   $(document).on('click', '.delete', function(){
      var id = $(this).attr("id");
      console.log(id);
      if(confirm("Are you sure want to remove this data?"))
      {
         $.ajax({
            url:"delete.php",
            method:"POST",
            data:{id:id},
            success:function(data)
            {
               alert("Data Dihapus");
            }
         });
      }
   });
});



$('.page-scroll').on('click', function(e){
   // console.log('ok');

   var href = $(this).attr('href');
   var elemenHref = $(href);
   // console.log(elemenHref.offset().top);

   $('html').animate( 
      { scrollTop: elemenHref.offset().top - 70}, 1250);

      e.preventDefault();
});


// paralax
$(window).on('load',function(){
   $('.kiriCon').addClass('conMuncul');
   $('.kananSos').addClass('sosMuncul');
   $('.kiriCom').addClass('comMuncul');
   $('.kananSki').addClass('skiMuncul');
})


$(window).scroll(function(){
   var wScroll = $(this).scrollTop();
   // console.log(wScroll);
   
   $('.header img').css({
      'transform' : 'translate(0px, '+ wScroll/4+'%)'
   });
   
   $('.header h1').css({
      'transform' : 'translate(0px, '+ wScroll/8+'%)'
   });

   
   $('.header h3').css({
      'transform' : 'translate(0px, '+ wScroll/4+'%)'
   });

   $('.header td').css({
      'transform' : 'translate(0px, '+ wScroll/2+'%)'
   });

   //.hero .content
   if( wScroll > $('.history').offset().top - 200) {
      $('.history .content').each(function(){
         setTimeout(function(){
            console.log('ok');
            $('.history .content').addClass('muncul')
         },2000);
      });
      // console.log('ok');
    
   };

   
});








