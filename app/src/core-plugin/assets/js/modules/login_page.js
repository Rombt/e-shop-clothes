jQuery(document).ready(function ($) {
  if ($('body').hasClass('login')) {
    if (getCookie('admin-panel-access') === 'true') {
      $('#user_login').val('guest');
      $('#user_pass').val('112233');
    }
  }
});

function getCookie(name) {
  var cookieValue = null;
  if (document.cookie && document.cookie !== '') {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      var parts = cookie.split('=');
      if (parts.length === 2 && parts[0] === name) {
        cookieValue = parts[1];
        break;
      }
    }
  }
  return cookieValue;
}
