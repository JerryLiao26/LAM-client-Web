function login() {
  let address = $('#address').val()
  let username = $('#username').val()
  let password = $('#password').val()
  let remember = $('#remember').prop('checked')
  if (address.trim() !== '' || username.trim() !== '' || password.trim() !== '') {
    // Store connection info
    let lam_info = {
      'address': address,
      'username': username,
      'password': password,
      'remember': remember
    }
    if (remember) {
      localStorage.setItem('lam_info', JSON.stringify(lam_info))
    }
    else {
      localStorage.setItem('lam_info', null)
    }
    // Submit data
    $.ajax({
      url: validate_url,
      method: 'POST',
      dataType: 'json',
      data: lam_info,
      success: function(respond) {
        // Jump
        location.href = respond
      },
      error: function(error) {
        console.log(error)
      }
    })
  }
  else {
    alert('Please fill in all the info')
    return
  }
}
