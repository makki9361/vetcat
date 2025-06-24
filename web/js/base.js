const header = document.querySelector('header');
let lastScrollTop = 10;

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        header.style.top = '-20vh';
    } else {
        header.style.top = '0';
    }
    lastScrollTop = scrollTop;
});


// анимация появления
function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');

        }
    });
}
let options = {
    threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
    observer.observe(elm);
}


// слайдер
let slider = document.querySelector('.slider');
let slider__items = slider.querySelectorAll('.slider__item');
let buttons = slider.querySelectorAll('.btn__slider');
let button__prev = buttons[0];
let button__next = buttons[1];
let maxItems = slider__items.length;

let num = 0;

let slider_2 = document.querySelector('.slider_2');
let slider__items_2 = slider_2.querySelectorAll('.slider__item_2');
let maxItems_2 = slider__items_2.length;

let num_2 = 0;

function transformNum(znak) {
    let backElem, frontElem;
    if (znak === 'minus') {
        backElem = slider__items[num + 1];
        frontElem = slider__items[num];
        backElem.style.transform = `translateZ(0px) translate(${-1 * num * 100}%, 0)`;
        frontElem.style.transform = `translateZ(0px) translate(${-1 * num * 100}%, 0)`;
    } else if (znak === 'plus') {
        backElem = slider__items[num - 1];
        frontElem = slider__items[num];
        backElem.style.transform = `translateZ(0px) translate(${-1 * num * 100}%, 0)`;
        frontElem.style.transform = `translateZ(0px) translate(${-1 * num * 100}%, 0)`;
    }
}

function addActive(znak) {
    let elem;
    if (znak === 'minus') {
        if (num - 1 === -1) {
            return;
        }
        num--;
        transformNum(znak);
        elem = slider__items[num + 1];
        elem.classList.remove('active');
    } else if (znak === 'plus') {
        if (num + 1 === maxItems) {
            return;
        }
        num++;
        transformNum(znak);
        elem = slider__items[num - 1];
        elem.classList.remove('active');
    }
    elem = slider__items[num];
    elem.classList.add('active');
}


function transformNum_2(znak_2) {
    let backElem_2, frontElem_2;
    if (znak_2 === 'minus') {
        backElem_2 = slider__items_2[num_2 + 1];
        frontElem_2 = slider__items_2[num_2];
        backElem_2.style.transform = `translateZ(0px) translate(${-1 * num_2 * 100}%, 0)`;
        frontElem_2.style.transform = `translateZ(0px) translate(${-1 * num_2 * 100}%, 0)`;
    } else if (znak_2 === 'plus') {
        backElem_2 = slider__items_2[num_2 - 1];
        frontElem_2 = slider__items_2[num_2];
        backElem_2.style.transform = `translateZ(0px) translate(${-1 * num_2 * 100}%, 0)`;
        frontElem_2.style.transform = `translateZ(0px) translate(${-1 * num_2 * 100}%, 0)`;
    }
}

function addActive_2(znak_2) {
    let elem_2;
    if (znak_2 === 'minus') {
        if (num_2 - 1 === -1) {
            return;
        }
        num_2--;
        transformNum_2(znak_2);
        elem_2 = slider__items_2[num_2 + 1];
        elem_2.classList.remove('active');
    } else if (znak_2 === 'plus') {
        if (num_2 + 1 === maxItems_2) {
            return;
        }
        num_2++;
        transformNum_2(znak_2);
        elem_2 = slider__items_2[num_2 - 1];
        elem_2.classList.remove('active');
    }
    elem_2 = slider__items_2[num_2];
    elem_2.classList.add('active');
}



button__prev.addEventListener('click', () => {
    addActive('minus');
    addActive_2('minus');
});

button__next.addEventListener('click', () => {
    addActive('plus');
    addActive_2('plus');
});


// видео
const playButton = document.getElementById('playButton');
const videoContainer = document.getElementById('videoContainer');
const video = document.getElementById('video');
const overlay = document.getElementById('overlay');

playButton.addEventListener('click', () => {
    overlay.style.display = 'block'; // Показываем затемнение
    videoContainer.style.display = 'block'; // Показываем контейнер с видео
    video.play();
});

video.addEventListener('ended', () => {
    overlay.style.display = 'none'; // Скрываем затемнение
    videoContainer.style.display = 'none'; // Скрываем контейнер с видео
    if (document.fullscreenElement) {
        document.exitFullscreen();
    }
});

overlay.addEventListener('click', () => {
    video.pause(); // Останавливаем видео
    overlay.style.display = 'none'; // Скрываем затемнение
    videoContainer.style.display = 'none'; // Скрываем контейнер с видео
});