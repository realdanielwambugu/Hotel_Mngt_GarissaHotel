$(document).on('click', 'a', function (e)
{
    if ($(this).attr('data-action-type') == 'download')
    {
        exit();
    }

    var route = $(this).attr('href').replace(/^\/|\/$/g, '');

    var href = config().host + '/' + route;

     var pathname = route.split('/')[0];

    if (pathname == 'open-paper' || pathname == 'open-pdf')
    {
        window.location.href = href;
    }

    history.pushState(null, null, href);

    $('body').html(loader());

    request(href);

    e.preventDefault();

});


$(window).on('popstate', function ()
{
    $('body').html(loader());

    request(location.pathname.split(/_(.+)/)[0]);
});

function request(href)
{
    $.get(href, function (data)
    {
       data = data.replace(/^.*?<body[^>]*>(.*?)<\/body>.*?$/s,"$1");

        $("body").html(data);

        // afterAjaxPageLoad();

    });
}

function loader()
{
   return`<div class='w-full h-screen ff-pri fx fx-j-c fx-i-c fs-xl fw-black
          color-pri'>
            <i class='far fa-spinner pr-2'> </i>
            <span class ='txt-h-c'> Loading </span>
        </div>`;
}
