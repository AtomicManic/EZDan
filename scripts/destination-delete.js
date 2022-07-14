document
  .getElementById('exampleModal')
  .addEventListener('shown.bs.modal', function (e) {
    e.preventDefault();
    console.log('hi');
    var button = document.getElementById('dest-delete-btn');
    var destId = button.getAttribute('data-dest_id');
    var url = button.getAttribute('data-url');

    console.log(destId);
    console.log(url);

    var modalBody = document.getElementsByClassName('modal-body');
    modalBody.innerHTML = destId;
  });
