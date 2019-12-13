$(window).on("load", fetchcomment);

function coment(){
  $('#coment button').addClass("show");
  $('#coment button').removeClass("hide");
}

function fetchcomment() {
  $.ajax({
      url: '/comment_video_view',
      type: 'POST',
      data: {
          '_token': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
          $("#commentpanel").html(data);
      }
  });
}

function submitComment() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
  $.ajax({
      url: '/comment_video',
      method: 'POST',
      data: $("#commentarea").serialize(),
      success: function (data) {
          if (data.status) {
              swal('Success', data.description, 'success');
              fetchcomment();
              
          } else {
              swal('Oops', 'Something when wrong', 'error');
          }
      }
  }, 'json');
}
