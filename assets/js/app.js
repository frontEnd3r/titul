/*          SLIDER   FOR    PROPOSAL       */

const prev = document.getElementById('btn-prev'),
    next = document.getElementById('btn-next'),
    slides = document.querySelectorAll('.poposal-wrapper_slider__area'),
    dots = document.querySelectorAll('.dots-for-slider_dot'),
    slidesWrap = document.querySelectorAll('.poposal-wrapper_slider__slides');
let index = 0;
const activeSlide = n => {
    for (slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}
const activeDot = n => {
    for (dot of dots) {
        dot.classList.remove('active');
    }
    dots[n].classList.add('active');
}
const prepareCurrentSlide = ind => {
    activeSlide(ind);
    activeDot(ind);
}
const nextSlide = () => {
    if (index == slides.length - 1) {
        index = 0;
        prepareCurrentSlide(index);
    } else {
        index++;
        prepareCurrentSlide(index);
    }
};
const prevSlide = () => {
    if (index == 0) {
        index = slides.length - 1;
        prepareCurrentSlide(index);
    } else {
        index--;
        prepareCurrentSlide(index);
    }
};
dots.forEach((item, indexDot) => {
    item.addEventListener('click', () => {
        index = indexDot;
        prepareCurrentSlide(index);

    })
});


/*      SLIDER  FOR     FEEDBACK        */


let swiperA = new Swiper(".mySwiperA", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,

    navigation: {
        nextEl: ".poposal-wrapper_slider__next  ",
        prevEl: ".swiper-button-prev",
    },
});


/*    TABS       */

var tabNavs = document.querySelectorAll(".tab");
var tabPanes = document.querySelectorAll(".journal-content");

for (var i = 0; i < tabNavs.length; i++) {

    tabNavs[i].addEventListener("click", function (e) {
        e.preventDefault();
        var activeTabAttr = e.target.getAttribute("data-btn");

        for (var j = 0; j < tabNavs.length; j++) {
            var contentAttr = tabPanes[j].getAttribute("journal-content");

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