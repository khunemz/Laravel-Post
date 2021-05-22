// const axios = require("axios");



// document.addEventListener('DOMContentLoaded', function() {

//   const items = $('.tweetitem--body').on('click', () => {
//     console.log('test');
//   });

//   // todo : use another framework

//   document.getElementById('tweetbox--submit').addEventListener('click', () => {
//     console.log('click');
//   });
// })



// window.onload = () => {
//   const baseUrl = 'http://localhost:8000/api';
//   axios.get(`${baseUrl}/apitweets`).then( (response)  => {
//     response.data.forEach(element => {
//       $('#tweet--list').append(
//         `
//         <div class="card tweetitem--card">
//           <div class="card-body tweetitem--body>
//             <div class="tweet--item">${element.body}</div>
//           </div>
//           <div class="card-footer tweetitem--body>
//             <div class="tweet--footer">Lot's of icons</div>
//           </div>
//         </div>
//        `
//       );
//     });
//   }).catch( (error) => console.log(error));
// }
