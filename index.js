const container = document.querySelector('.js-content');
const tittle = document.querySelector('.result');
let player = 'X';
let historyX = [];
let historyO = [];
const wins = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
  [1, 4, 7],
  [2, 5, 8],
  [3, 6, 9],
  [1, 5, 9],
  [3, 5, 7],
];

function createMarkup() {
  let markup = '';
  for (let i = 1; i < 10; i++) {
    markup += `<div class='item' data-id='${i}'></div>`;
  }
  container.innerHTML = markup;
}

createMarkup();
container.addEventListener('click', onClick);

function onClick(event) {
  const { target } = event;

  if (target == this || target.textContent) {
    return;
  }
  const id = Number(target.dataset.id);
  let result = false;

  if (player == 'X') {
    historyX.push(id);
    result = isWinner(wins, historyX);
  } else {
    historyO.push(id);
    result = isWinner(wins, historyO);
  }
  target.textContent = player;
  if (result) {
    let message = `Победитель ${player} 😍👏😜`;
    tittle.innerHTML = message;
    setTimeout(resetGame, 3000);
    return;
  } else if (historyO.length + historyX.length === 9) {
    message = `Ничья, попробуйте снова`;
    tittle.innerHTML = message;
    setTimeout(resetGame, 3000);
    return;
  }
  player = player === 'X' ? 'O' : 'X';
}

function isWinner(arrWins, player) {
  return arrWins.some(item => item.every(id => player.includes(id)));
}

function resetGame() {
  createMarkup();
  historyX = [];
  historyO = [];
  player = 'X';
  tittle.innerHTML = 'Крестики нолики';
}
