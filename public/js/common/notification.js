function notify({ title, message, icon, type, url}){
    $.growl({
        icon,
        title,
        message,
        url
    },{
        element: 'body',
        type: type,
        allow_dismiss: true,
        offset: {
            x: 30,
            y: 30
        },
        placement: {
            // from: from,
            // align: align
        },
        spacing: 10,
        z_index: 999999,
        delay: 2500,
        timer: 1000,
        url_target: '_blank',
        mouse_over: false,
        animate: {
            enter: "animated fadeInRight",
            exit: "animated fadeOutRight"
        },
        icon_type: 'class',
        template: '<div data-growl="container" class="alert" role="alert">' +
        '<span data-growl="icon"></span>' +
        '<span data-growl="title"></span>' +
        '<span data-growl="message"></span>' +
        '<a href="#" data-growl="url"></a>' +
        '</div>'
    });
};