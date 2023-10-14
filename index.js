const button = document.querySelector('.button');
const title = document.querySelector('.title');

function timer() {
  let i = 0;
  let intervalId = setInterval(
      () => {
        let date = new Date();
        title.innerHTML = date.getHours() + ':' + date.getMinutes() + ':' +
            date.getSeconds();
      }, 1000,
  );
}

button.addEventListener('click', function func() {
  timer();
  this.removeEventListener('click', func);
});