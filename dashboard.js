$('.filter-btn').on('click', function () {

    let type = $(this).attr('id');
    let boxes = $('.project-box');

    $('.main-btn').removeClass('active');
    $(this).addClass('active');


    if (type == 'dsg-btn') {
        eachBoxes('dsg', boxes)
    } else if (type == 'dev-btn') {
        eachBoxes('dev', boxes);
    } else if (type == 'seo-btn') {
        eachBoxes('seo', boxes);
    } else {
        eachBoxes('all', boxes);

    }

});

function eachBoxes(type, boxes) {

    if (type == 'all') {
        $(boxes).fadeIn();
    } else {
        $(boxes).each(function () {
            if (!$(this).hasClass(type)) {
                $(this).fadeOut('slow');
            } else {
                $(this).fadeIn();
            }
        });
    }
}

let navBtn = $('.nav-item');

let bannerSection = $('#mainSlider');
let aboutSection = $('#about-area');
let servicesSection = $('#services-area');
let teamSection = $('#team-area');
let portifolioSection = $('#portifolio-area');
let contactSection = $('#contact-area');

let scrollTo = '';

$(navBtn).click(function () {

    let btnId = $(this).attr('id');
    console.log(btnId);

    if (btnId == 'about-menu') {
        scrollto = aboutSection;
    } else if (btnId == 'services-menu') {
        scrollto = servicesSection;
    } else if (btnId == 'team-menu') {
        scrollto = teamSection;
    } else if (btnId == 'portifolio-menu') {
        scrollto = portifolioSection;
    } else if (btnId == 'contact-menu') {
        scrollto = contactSection;
    } else {
        scrollto = bannerSection;
    }

    $([document.documentElement, document.body]).animate({
        scrollTop: $(scrollto).offset().top - 70
    }, 1000);

});

let sql = document.querySelector('.video1'); 
sql.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r"; })

let php = document.querySelector('.video2'); 
php.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k"; })

let js = document.querySelector('.video3'); 
js.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLntvgXM11X6pi7mW0O4ZmfUI1xDSIbmTm"; })

let html = document.querySelector('.video4'); 
html.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n"; })
