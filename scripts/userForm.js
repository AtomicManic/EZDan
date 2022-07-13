window.onload = () => {
  let fail = 0;

  document.getElementById('submitBtn').onclick = () => {
    document.getElementById('userInsertNameErr').style.display = 'none';
    document.getElementById('userInsertUsernameErr').style.display = 'none';
    document.getElementById('userInsertPasswordErr').style.display = 'none';
    document.getElementById('userInsertValidPasswordErr').style.display =
      'none';
    fail = 0;
  };

  document.getElementById('userForm').onsubmit = () => {
    const name = document.getElementById('userName').value;
    const username = document.getElementById('userUserName').value;
    const password = document.getElementById('userPassword').value;

    if (name == '') {
      document.getElementById('userInsertNameErr').style.display = 'block';
      fail = 1;
    }

    if (username == '') {
      document.getElementById('userInsertUsernameErr').style.display = 'block';
      fail = 1;
    }

    if (password == '') {
      document.getElementById('userInsertPasswordErr').style.display = 'block';
      fail = 1;
    } else if (password.length < 5) {
      document.getElementById('userInsertValidPasswordErr').style.display =
        'block';
      fail = 1;
    }

    if (fail) {
      return false;
    }
  };
};
