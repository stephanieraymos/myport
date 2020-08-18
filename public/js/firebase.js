'use strict';

//grab a form
const form = document.querySelector('.form-inline');

//grab an input
const inputEmail = form.querySelector('#inputEmail');
const inputFirstName = form.querySelector('#inputFirstName');
const inputLastName = form.querySelector('#inputLastName');
const inputMessage = form.querySelector('#inputMessage');
const inputPhone = form.querySelector('#inputPhone');


//config your firebase push
const config = {
    apiKey: "AIzaSyAGyrO7a2kKLOXA75pDumpdlZ9rachXOOY",
    authDomain: "portfolio-df0a4.firebaseapp.com",
    databaseURL: "https://portfolio-df0a4.firebaseio.com",
    projectId: "portfolio-df0a4",
    storageBucket: "portfolio-df0a4.appspot.com",
    messagingSenderId: "992167096233",
    appId: "1:992167096233:web:9f7320eae316447a6e5eb8",
    measurementId: "G-P1W8F07ZM7"
};


//create a functions to push
function firebasePush(firstName, lastName, message, phone) {


    //prevents from braking
    if (!firebase.apps.length) {
        firebase.initializeApp(config);
    }

    //push itself
    var submissions = firebase.database().ref('submissions').push().set(
        {
            submission: [firstName.value, lastName.value, message.value, phone.value]

        }
    );
}
function resetForm() {
    document.getElementById("form").reset();
}

//push on form submit
if (form) {
    form.addEventListener('submit', function (evt) {
        evt.preventDefault();
        firebasePush(inputEmail, inputFirstName, inputLastName, inputMessage, inputPhone);
        
        //shows alert if everything went well.
        return alert('Thank you for your message!');
    })
}