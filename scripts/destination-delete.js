window.onload = () => {
  const modal = document.getElementById('exampleModal');
  $(modal).on('show.bs.modal', function (e) {
    const modalBody = document.getElementsByClassName('modal-body');
    modalBody[0].innerHTML = e.relatedTarget.dataset['dest_name'];
  });
};
