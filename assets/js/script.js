$('#myTabContent a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


// password reveal buttons
    $('#spwd a').click(function (e) {
        e.preventDefault();
        $box = $($(this).closest('#spwd'));
        $box.toggleClass('shown');
        if ($box.hasClass('shown')) $('[type=password]', $box).attr('type', 'text');
        else $('input', $box).attr('type', 'password');
    });
