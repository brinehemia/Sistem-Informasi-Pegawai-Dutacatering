$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : 'Next',
            finish : 'Selesai',
            current : ''
        },
        onFinished: function (event, currentIndex)
    {
        $("form").submit();
    }  
    });



    $("#day").datepicker({
        dateFormat: "dd / mm / yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
       
    });

     
});
