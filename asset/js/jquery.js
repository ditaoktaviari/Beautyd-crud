$(document).ready(function(){
    $('.checkbox').click(function(){
        if($(this).is(':checked')){
            $('#Password').attr('type','text');
        }else{
            $('#Password').attr('type','password');
        }
    });
});

$(document).ready(function(){
    $('ul.first').hover(function(){
        $('this').find('ul.secondary').slideToggle('normal');
    });
});
