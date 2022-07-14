var button = document.getElementById('dest-delete-btn');
var destId = button.getAttribute('data-dest_id');
var url = button.getAttribute('data-url');

console.log(destId);
console.log(url);

var modal = document.getElementById('exampleModal');
modal.onload = () => {
var modalBody = document.getElementsByClassName("modal-body");
modalBody.innerHTML = destId;
}
