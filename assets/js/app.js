/*      SLIDER  FOR     FEEDBACK        */


let swiperFeedback = new Swiper(".feedback-swiper", {
    slidesPerView: 3,
    // spaceBetween: 10,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,

    breakpoints: {
        2000: {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 3
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 3
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 10,
            slidesPerGroup: 2
        },
        576: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        380: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0
        }
    },


    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


//  SLIDER FOR POPOSAL

let swiperPoposal = new Swiper(".poposal-swiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },

    mousewheel: true,
    keyboard: true,
});

//SLIDER IN SINGLE PROPERTY

let swiperProperty1 = new Swiper(".galery-mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
let swiperProperty2 = new Swiper(".galery-mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiperProperty1,
    },
});

/*    TABS       */

let tabNavs = document.querySelectorAll(".tab");
// const tabsElement = Array.from(document.querySelectorAll('.tab'));
let tabPanes = document.querySelectorAll(".journal-content");

for (var i = 0; i < tabNavs.length; i++) {

    tabNavs[i].addEventListener("click", function (e) {
        e.preventDefault();
        var activeTabAttr = e.target.getAttribute("data-btn");

        for (var j = 0; j < tabNavs.length; j++) {

            var contentAttr = tabPanes[j].getAttribute("data-content");

            if (activeTabAttr === contentAttr) {
                tabNavs[j].classList.add("active");
                tabPanes[j].classList.add("active");
            } else {
                tabNavs[j].classList.remove("active");
                tabPanes[j].classList.remove("active");
            }
        }
        ;
    });
}


let estate = document.querySelector('.nav_links__estate');
let menu = document.querySelector('.nav-dropdown')

const estateTab = () => {
    estate.classList.toggle('click')
    menu.classList.toggle('click')
}


estate.addEventListener('click', estateTab)

//DROPDOWN SEARCH
const categoryInput = document.getElementById('category-input');
const dropdownItems = document.querySelectorAll('.dropdown__item');
const dropdownBtn = document.querySelector('.dropbtn');

dropdownItems.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        let text = item.textContent;
        let categoryID = item.getAttribute('data-category');
        dropdownBtn.innerHTML = text;
        categoryInput.value = categoryID;
    })
})

//YANDEX MAP
let sectionMap = document.querySelector('.map');


if (sectionMap) {
    function yamapInit() {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('ymap', {
                    center: [41.788834, 44.754414],
                    zoom: 9
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'Местоположение объекта',
                }),


                myGeoObject = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [41.788834, 44.754414]
                    },

                    properties: {
                        iconContent: 'Местоположение объекта',
                    }
                }, {

                    preset: 'islands#redStretchyIcon',
                });

            myMap.geoObjects
                .add(myPlacemark)
                .add(myGeoObject);
        });
    }

    yamapInit();
}

// modal-window

const btnOpen = document.getElementById('section-help_title_btn');
const btnOpen2 = document.getElementById('quality-expert_text__btn');
const btnOpen3 = document.getElementById('taxi-txt_btn');
const modal = document.getElementById('wrapper-modal');
const overlay = document.getElementById('overlay');

if (btnOpen) {
    btnOpen.addEventListener('click', () => {
        modal.classList.add('active');
    });
}

if (btnOpen2) {
    btnOpen2.addEventListener('click', () => {
        modal.classList.add('active');
    });
}

if (btnOpen3) {
    btnOpen3.addEventListener('click', () => {
        modal.classList.add('active');
    });
}


const closeModal = () => {
    modal.classList.remove('active');
}

overlay.addEventListener('click', closeModal);