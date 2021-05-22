const axios = require("axios");

document.getElementById('tweetbox--submit').addEventListener('click', () => {
  console.log('click');
});

window.onload = () => {
  const baseUrl = 'http://localhost:8000/api';
  axios.get(`${baseUrl}/apitweets`).then( (response)  => {
    response.data.forEach(element => {
      $('#tweet--list').append(
        `<div class="tweet--item">${element.body}</div>`
      );
    });
  }).catch( (error) => console.log(error));
}
