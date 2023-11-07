const modal = new BSN.Modal('#subscription-modal');
const refs = {
  modal: document.querySelector('#subscription-modal'),
  buttonClose: document.querySelector('.btn-secondary'),
  buttonSubscribe: document.querySelector('.btn-primary'),
};
const PROMPT_DELAY = 500;
const MAX_PROMPT_ALERTS = 3;
let promptCounter = 0;
let hasSubscribed = false;

openModal();
refs.modal.addEventListener('hide.bs.modal', openModal);
refs.buttonClose.addEventListener('click', onCloseButton);
refs.buttonSubscribe.addEventListener('click', onSubscibe);

function onCloseButton() {
  modal.hide();
}

function onSubscibe() {
  hasSubscribed = true;
  modal.hide();
}

function openModal() {
  if (promptCounter === MAX_PROMPT_ALERTS || hasSubscribed) {
    return;
  }
  setTimeout(() => {
    console.log('Open nadoedalka');
    modal.show();
    promptCounter += 1;
  }, PROMPT_DELAY);
}

// let promptCounter = 0;
// let hasSubscribed = false;
//
// const intervalId = setInterval(() => {
//   if (promptCounter === MAX_PROMPT_ALERTS) {
//     clearInterval(intervalId);
//     return;
//   }
//   promptCounter += 1;
//   modal.show();
// }, PROMPT_DELAY);
