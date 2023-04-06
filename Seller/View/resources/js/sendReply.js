// // function hideParentElement(event) {
// //   event.preventDefault(); // prevent form submission
// //   const submitBtn = event.target;
// //   const parentElement = submitBtn.closest('.each-review');
// //   parentElement.style.display = 'none'; // hide the parent element
// // }
  
// function hideParentElement(event) {
//   event.preventDefault(); // prevent form submission
//   const submitBtn = event.target;
//   const parentElement = submitBtn.closest('.each-review');
//   const form = submitBtn.closest('form');
//   const formData = new FormData(form);

//   // Send email using Ajax
//   const xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function() {
//     if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
//       // Email sent successfully, hide the parent element
//       parentElement.style.display = 'none'; // hide the parent element
//     }
//   };
//   xhr.open('POST', form.action);
//   xhr.send(formData);
// }

