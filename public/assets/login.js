import axios from 'axios';
const form = document.querySelector("form");
const btnLogin = document.querySelector("#btn-login");

btnLogin.addEventListener("click", async function (event) {
    event.preventDefault();
    try {
        const formData = new FormData(form);
        const {data} = await axios.post('/login', formData);
    } catch (error) {
        console.log(error.response.data);
    }
});
