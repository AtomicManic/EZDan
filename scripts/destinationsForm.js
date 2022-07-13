window.onload = () => {
  let fail = 0;

  document.getElementById('destSubmitBtn').onclick = () => {
    document.getElementById('destNameErr').style.display = 'none';
    document.getElementById('destCityErr').style.display = 'none';
    document.getElementById('destStreetErr').style.display = 'none';
    document.getElementById('destNumberErr').style.display = 'none';
    fail = 0;
  };

  document.getElementById('destForm').onsubmit = () => {
    const destName = document.getElementById('dest_name').value;
    const destCity = document.getElementById('dest_city').value;
    const destStreet = document.getElementById('dest_street').value;
    const destHomeNumber = document.getElementById('dest_number').value;

    console.log(destHomeNumber);

    if (destName.length < 3) {
      document.getElementById('destNameErr').style.display = 'block';
      fail = 1;
    }

    if (destCity.length < 3) {
      document.getElementById('destCityErr').style.display = 'block';
      fail = 1;
    }

    if (destStreet.length < 3) {
      document.getElementById('destStreetErr').style.display = 'block';
      fail = 1;
    }

    if (destHomeNumber <= 0) {
      document.getElementById('destNumberErr').style.display = 'block';
      fail = 1;
    }

    if (fail) {
      return false;
    }
  };
};
