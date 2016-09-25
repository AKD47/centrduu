$(document).ready(function(){

    var topSlider = $('.top-slider__box');

    topSlider.on('changed.owl.carousel', function(event) {
        console.log(event);
    });

    topSlider.owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    /*market yandex map*/
    if ($('#footerMap').length > 0) {//проверяет наличие блока на странице

        ymaps.ready(function () {

            var myMap = new ymaps.Map('footerMap', {
                // При инициализации карты, обязательно нужно указать
                // ее центр и коэффициент масштабирования
                center: [48.000663, 37.811438],
                zoom: 17
            });
            // Создание метки 
            var myPlacemark = new ymaps.Placemark(
                // Координаты метки
                [48.000663, 37.811438] , {
                    // Свойства
                    // Текст метки
                    iconContent: 'Центр детского творчества'
                }, {
                    // Опции
                    // Иконка метки будет растягиваться под ее контент
                    preset: 'twirl#blueStretchyIcon'
                });
            // Добавление метки на карту
            myMap.geoObjects.add(myPlacemark);
        });
    };
    /*close market yandex map*/
});