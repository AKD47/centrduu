$(document).ready(function(){

    /*header-top menu*/
    /*$(window).scroll(function () {

        var header = $('.header');
        var headerLogo = $('.header__logo');
        var headerNav = $('.header__navbar');


        if($(this).scrollTop() >= 60){
            header.addClass('fixed');
            headerLogo.css({width: '0%'});           
            headerNav.css({width: '100%'});
        }
        else {
            header.removeClass('fixed');
            headerLogo.css({width: '30%'});
            headerNav.css({width: '70%'});
        }
    });*/
    /*close header-top menu*/

    /*top-slider*/
    var topSlider = $('.top-slider__box');

    topSlider.on('changed.owl.carousel', function(event) {
        console.log(event);
    });

    topSlider.owlCarousel({
        /*animateIn: 'fadeIn',
        animateOut: 'fadeOut',*/
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
    /*close top-slider*/
    /*contacts yandex map*/
    var map = new Map();    
    map.init({        
        selector:'#contactsMap',
        center:'г. Донецк, ул. 50-летия СССР, дом 108',
        zoom: 15,
        placemarks: [
            {
                address:'г. Донецк, ул. 50-летия СССР, дом 108',
                options: [
                    {key:'draggable',value:false}
                ],
                properties: [
                    {key:'hintContent',value:'МОУДОД «ДОМ ДЕТСКОГО ТВОРЧЕСТВА ВОРОШИЛОВСКОГО РАЙОНА ГОРОДА ДОНЕЦКА»'},
                    {key:'balloonContentHeader', value:"Предприятия Донецка"},
                    {key:'balloonContentBody', value:"<h1>ArtCraft</h1>"}
                ]
            }
        ]
    });
    /*close contacts yandex map*/
    
    /*validation*/
    if(document.getElementById('feedback')){//проверка наличия формы на странице
        var validation = new Validation();//переменная для библиатеки валидации
        
        validation.init(//инициализация валидации
            {
                ajax: true,
                ajaxUrl: myajax.url,
                classItem: "contacts__form--field",//елемент, который нужно провалидировать 
                eventElement: '#submitFeedback',//событие по клику кнопки 'Отправить'
                items: [//масив объектов
                    {
                       item: 'email', tpl: 'email', tplMsg: 'некорректный e-mail'//объект эл.почта с сообщением о некорректном вводе
                    },
                    {
                        item: 'name', tpl: 'kir+lat', tplMsg: 'только буквы'//объект имя с сообщением о некорректном вводе
                    }                    
                ],
                ajaxSubmitSuccess: function (responseText, err, form) {
                    if (!err) {
                        /*form.submit();*/
                        alert('Сообщение успешно отправлено!');
                        validation.clearInput('name');
                        validation.clearInput('email');
                        validation.clearInput('message');
                    }
                }
            }
        )
    }
    /*closevalidation*/    
});