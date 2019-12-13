function openModal(obj){
  $('#myModal').modal('show');
}

function save(obj){
  var form = $("#form-changeProfile");
  $('#image').val("");
  $.ajax({
    url : '/change-profile',
    type: 'POST',
    data : $("#form-changeProfile").serialize(),
    success: function(data){
       if (data.status) {
         swal('Success', data.description, 'success');
         $('#myModal').modal('hide');
         $('#image').html(data.image);
         $('#name').html(data.name);
         $('#email').html(data.email);

         // console.log(data);
         // location.reload();
       }
       else {
         var span =document.createElement("span");
           span.innerHTML = data.description;
           swal("Oops!", data.description, "error");
       }
    }

  }, 'json');
}


function openModalPass(obj){
  $('#modal').modal('show')
}
function showAndhidePassword(){
  if($('#show_hide_password input').attr("type") == "text"){
      $('#show_hide_password input').attr('type', 'password');
      $('#show_hide_password i').addClass( "fa-eye-slash" );
      $('#show_hide_password i').removeClass( "fa-eye" );
  }else if($('#show_hide_password input').attr("type") == "password"){
      $('#show_hide_password input').attr('type', 'text');
      $('#show_hide_password i').removeClass( "fa-eye-slash" );
      $('#show_hide_password i').addClass( "fa-eye" );
  }
}

function showAndhideNewPassword(){
  if($('#show_hide_password_new_passowrd input').attr("type") == "text"){
    $('#show_hide_password_new_passowrd input').attr('type', 'password');
    $('#show_hide_password_new_passowrd i').addClass( "fa-eye-slash" );
    $('#show_hide_password_new_passowrd i').removeClass( "fa-eye" );
  }else if($('#show_hide_password_new_passowrd input').attr("type") == "password"){
    $('#show_hide_password_new_passowrd input').attr('type', 'text');
    $('#show_hide_password_new_passowrd i').removeClass( "fa-eye-slash" );
    $('#show_hide_password_new_passowrd i').addClass( "fa-eye" );
  }
}

function showAndhideReNewPassword(){
  if($('#show_hide_password_re_new_password input').attr("type") == "text"){
      $('#show_hide_password_re_new_password input').attr('type', 'password');
      $('#show_hide_password_re_new_password i').addClass( "fa-eye-slash" );
      $('#show_hide_password_re_new_password i').removeClass( "fa-eye" );
  }else if($('#show_hide_password_re_new_password input').attr("type") == "password"){
      $('#show_hide_password_re_new_password input').attr('type', 'text');
      $('#show_hide_password_re_new_password i').removeClass( "fa-eye-slash" );
      $('#show_hide_password_re_new_password i').addClass( "fa-eye" );
  }
}

function change_password(obj){
  var form = $("#form-changePassword");
  $.ajax({
    url : '/change-password',
    type: 'POST',
    data : form.serialize(),
    success: function(data){
       if (data.status) {
         swal('Success', data.description, 'success');
         window.location= "";
       }
       else {
         var span =document.createElement("span");
           swal("Oops!", data.description, "error");
       }
    }

  }, 'json');
}
