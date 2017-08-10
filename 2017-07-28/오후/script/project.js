$(document).ready(function() {
    var numAc = $('article').length,
        widSec = 200 * numAc,
        widTotal = widSec + 600
    $('section').width(widTotal)
    $('body').height(widSec)
    $('html,body').animate({ scrollTop: widSec }, 2000)
    $(window).on('scroll', () => {
        var scroll = $(this).scrollTop()
        $('section').stop().animate({ left: -scroll }, 600);
    })
    $('article h2').on('click', function(e) {
        e.preventDefault()
        var index = $(this).parent().index(),
            src = $(this).children('a').attr('href'),
            posAc = 200 * index
        $('article').removeClass('on')

        $('article p img').attr({ src: '' })
        $(this).siblings('p').children('img').attr({ src: '' })
        $('html,body').scrollTop(posAc)
        $(this).parent().addClass('on')
    })
    $('span').on('click', () => {
        $('article').removeClass('on')
    })
    $('#navi li').on('click', function() {
        var i = $(this).index(),
            posNavi = 1000 * i;
        $('#navi li,article').removeClass()
        $(this).addClass('on')
        $('html,body').scrollTop(posNavi)
    })
})