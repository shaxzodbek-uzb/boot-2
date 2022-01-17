import axios from "axios";

axios.defaults.baseURL = "http://frutata.test/api";
axios.defaults.headers.common["Authorization"] =
    "Bearer " + localStorage.getItem("token");

// axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
axios.defaults.timeout = 2500;

// Add a request interceptor
// axios.interceptors.request.use(
//     function (config) {
//         // Do something before request is sent
//         console.log("request jo'natilmoqda");
//         return config;
//     },
//     function (error) {
//         // Do something with request error
//         return Promise.reject(error);
//     }
// );
//
// // Add a response interceptor
axios.interceptors.response.use(
    function (response) {
        // Any status code that lie within the range of 2xx cause this function to trigger
        // Do something with response data

        return response.data;
    },
    function (error) {
        // Any status codes that falls outside the range of 2xx cause this function to trigger
        // Do something with response error
        return Promise.reject(error);
    }
);

export default axios;
