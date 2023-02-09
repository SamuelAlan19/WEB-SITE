let navBtn = $('.nav-link');

let bannerSection = $('#mainSlider')
let teamSection = $('#about-team');
let servicesSection = $('#about-services');
let cursosSection = $('#about-cursos');
let contactSection = $('#about-contact');

let scrollTo = '';

$(navBtn).click(function () {

    let btnId = $(this).attr('id');
    console.log(btnId);

    if (btnId == 'team-menu') {
        scrollTo = teamSection;
    } else if (btnId == 'services-menu') {
        scrollTo = servicesSection;
    } else if (btnId == 'cursos-menu') {
        scrollTo = cursosSection;
    } else if (btnId == 'contact-menu') {
        scrollTo = contactSection;
    } else {
        scrollTo = bannerSection;
    }

    $([document.documentElement, document.body]).animate({
        scrollTop: $(scrollTo).offset().top - 10
    }, 100);

});

document.getElementById("about-team").scrollIntoView();

let sql = document.querySelector('.video1');
sql.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r"; })

let php = document.querySelector('.video2');
php.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k"; })

let js = document.querySelector('.video3');
js.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLntvgXM11X6pi7mW0O4ZmfUI1xDSIbmTm"; })

let html = document.querySelector('.video4');
html.addEventListener('click', () => { window.location.href = "https://www.youtube.com/playlist?list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n"; })
