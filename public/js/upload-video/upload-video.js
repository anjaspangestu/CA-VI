// const subjectClass = document.getElementsByClassName("value")

//     // adds event listeners to those elements
//     for (let i = 0; i < subjectClass.length; i++) {
//         subjectClass[i].addEventListener('click', changeSubCategory)
//     }



function changeSubCategory(){
   $.ajax({
     url: '/change-sub-category',
     type: 'POST',
     data: {'_token': $('meta[name="csrf-token"]').attr('content'), 'id': $("#datacategories").val()},
     success: function (data){
       if (data.status) {
         $("#submenu").html(data.data);
       }
       else {
         console.log(data);
       }
     }
   },'json');
 }


 function submitVideo() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
	$.ajax({
		url: '/uploadvideo',
		method: 'post',
		data: $("#submitvideo").serialize(),
		success: function (data) {
			if (data.status) {
				swal('Success', data.description, 'success');
				window.location.assign("/");
			} else {
				swal('Oops', 'Something when wrong', 'error');
			}
		}
	}, 'json');
  }

 /*
 	By Osvaldas Valutis, www.osvaldas.info
 	Available for use under the MIT License
 */

//  'use strict';

//  ;( function ( document, window, index )
//  {
//  	var inputs = document.querySelectorAll( '.inputfile' );
//  	Array.prototype.forEach.call( inputs, function( input )
//  	{
//  		var label	 = input.nextElementSibling,
//  			labelVal = label.innerHTML;

//  		input.addEventListener( 'change', function( e )
//  		{
//  			var fileName = '';
//  			if( this.files && this.files.length > 1 )
//  				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
//  			else
//  				fileName = e.target.value.split( '\\' ).pop();

//  			if( fileName )
//  				label.querySelector( 'span' ).innerHTML = fileName;
//  			else
//  				label.innerHTML = labelVal;
//  		});

//  		// Firefox bug fix
//  		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
//  		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
//  	});
//  }( document, window, 0 ));
