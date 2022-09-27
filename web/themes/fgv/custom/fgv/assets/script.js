$video = '<iframe width="1024" height="580" src="https://www.youtube.com/embed/0Xjyx-QnpzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

$("#top-menu a").click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        if($(aid).children('h2').length){
                $offset = $(aid).find('h2').height() + $('#top-menu').height()*2;
                $offset = $offset ;
        } else {
                $offset = 80;
        }
        $('html,body').animate({scrollTop: $(aid).offset().top-$offset},'slow');
});

$(".leia-mais").click(function(e) {
        e.preventDefault();
        $('#lightbox > div').html($(this).parent().html());
        $('#lightbox').addClass('ativo');
});

$("#video-btn").click(function(e) {
        e.preventDefault();
        $('#lightbox > div').html($video);
        $('#lightbox').addClass('ativo video');
});

$("#fechar").click(function(e) {
        e.preventDefault();
        $('#lightbox').removeClass('ativo video');
        $('#lightbox > div').html('');
});