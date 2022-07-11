window.onload = () => {
  let fail = 0;

  document.getElementById('loginBtn').onclick = () => {
    document.getElementById('InsertUsernameErr').style.display = 'none';
    document.getElementById('InsertPasswordErr').style.display = 'none';
    document.getElementById('invalidErr').style.display = 'none';
  };

  document.getElementById('login-frm').onsubmit = () => {
    const username = document.getElementById('username-inpt').value;
    const password = document.getElementById('password').value;

    if (username == '') {
      document.getElementById('InsertUsernameErr').style.display = 'block';
      fail = 1;
    }
    if (password == '') {
      document.getElementById('InsertPasswordErr').style.display = 'block';
      fail = 1;
    }

    if (username.length > 0 && password.length > 0) {
      document.getElementById('invalidErr').style.display = 'block';
    }

    if (fail) {
      return false;
    }
  };
};
