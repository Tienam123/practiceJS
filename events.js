// click
function getRandomHexColor() {
  return `#${Math.floor(Math.random() * 16777215).toString(16).padStart(6, 0)}`;
}

document.querySelector('#testForm').addEventListener('reset', function(event) {
  alert('Обработчик события reset');
  let result = confirm('Очистить форму?');
  if (!result) {
    event.preventDefault();
    event.stopPropagation();
  }
});