'use strict';
var feedbackCall = document.querySelector('.feedback-batton');
var callForm = document.querySelector('.index-main__feedback-call');
var closeButton = document.querySelector('.close-callback');
var changeElement = null;

var onFeedbackCallClick = function () {
    if (changeElement) {
        callForm.classList.add('visually-hidden');
    }
    changeElement = callForm.classList.remove('visually-hidden');
};
var closeCallFormClick = function () {
    callForm.classList.add('visually-hidden');
};

feedbackCall.addEventListener('click', onFeedbackCallClick);
closeButton.addEventListener('click', closeCallFormClick);