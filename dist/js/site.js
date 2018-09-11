function showPhoneNumber() {
  if($('#phoneNum').hasClass('show')){
    $('#phoneNum').removeClass('show');
  } else {
    $('#phoneNum').addClass('show');
  }
}

$(document).ready(function(){
  $('#showPhoneBtn').on("click",showPhoneNumber);
});


