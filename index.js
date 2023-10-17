import auto from "./recipes.js";
// Определяем DOM елементы
const list = document.querySelector('.cards');

const instance = basicLightbox.create(`
    <div class="modal">
        <div class="container-image" style="width: 100%;height: 80%;background: #fff;">
        <img src="" alt="">
        <div class="container-text" style="width: 100%;height: 20%;background: #fff;">
        <img src="" alt="">
         <h3 class="title">A custom modal that has been styled independently. It's not part of basicLightbox, but perfectly shows its flexibility.</h3>
    </div>
`, {
    closable: false,
    onShow: (instance) => {
        instance.element().addEventListener('click', onCloseCard)
        window.addEventListener('keydown', onPressKey)
    },
})
// Определяем разметку
const markup = auto.map(el => {
    return `<li class="js-target" data-car-url="${el.image}" data-car-title="${el.name}">
<img class="js-target"  src="${el.image}" width="300" height="200">
<h3 class="js-target">${el.name}</h3>
<p class="js-target">${el.price}</p>
</li>`
}).join('');
list.insertAdjacentHTML('beforeend', markup)
// Делегируем события по клику
list.addEventListener('click', onClickCard);

function onClickCard(event) {
    const {image, id} = auto;
    if (event.target == this) {
        return;
    }
    const item = event.target.dataset.carUrl ?? event.target.closest('li').dataset.carUrl;
    instance.show(() => {
        instance.element().querySelector('img').src = '';
        instance.element().querySelector('img').src = item;
        instance.element().querySelector('h3.title').textContent = event.target.dataset.carTitle ?? event.target.closest('li').dataset.carTitle;
    });
}

// Добавляем событие на клик в любую часть екрана
function onCloseCard(e) {
    instance.close()
    removeEventListener("click", onCloseCard)
}

// Добавляем событие на клик по кнопке Esc
function onPressKey(e) {
    if (e.code === 'Escape') {
        instance.close();
        removeEventListener('keydown', onPressKey)
    }
}

console.log(_.throttle)
