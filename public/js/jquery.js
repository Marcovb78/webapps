function scrollListener() {
    if ($(window).scrollTop() > 500) {
        $('.navbar').css({
            backgroundColor: '#00000040'
        });
    } else {
        $('.navbar').css({
            backgroundColor: 'transparent'
        });
    }
};
$(document).scroll(scrollListener);
scrollListener();
