$(function () {


    var youtube = document.querySelectorAll(".youtube");

    for (var i = 0; i < youtube.length; i++) {

        var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed +
            "/sddefault.jpg";

        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));

        youtube[i].addEventListener("click", function () {

            var iframe = document.createElement("iframe");

            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset
                .embed + "?" +
                "&autoplay=1");

            this.innerHTML = "";
            this.appendChild(iframe);
        });
    };




    // pc轮播



    var mySwiper = new Swiper('.pc-banner .swiper-container', {



        loop: true,



        autoplay: true,



        speed: 1200,



        navigation: {



            nextEl: '.pc-banner .swiper-button-next',



            prevEl: '.pc-banner .swiper-button-prev',



        },



        pagination: {



            el: '.pc-banner .swiper-pagination',



            clickable: true,



        },



    })







    // pc-partner



    var mySwiper = new Swiper('.pc-partner .swiper-container', {



        autoplay: true,



        speed: 1200,



        spaceBetween: 20,



        slidesPerView: 4,



        slidesPerColumn: 2,



        navigation: {



            nextEl: '.pc-partner .swiper-button-next',



            prevEl: '.pc-partner .swiper-button-prev',



        },







        pagination: {



            el: '.pc-partner .swiper-pagination',



            clickable: true,



        },



    })







    // wap 轮播



    // wap-banner



    var mySwiper = new Swiper('.wap-banner .swiper-container', {



        loop: true,



        autoplay: true,



        speed: 1200,



        pagination: {



            el: '.wap-banner .swiper-pagination',



            clickable: true,



        },



    })



    // wap-partenr



    var mySwiper = new Swiper('.wap-partner .swiper-container', {



        loop: true,



        autoplay: true,



        speed: 1200,



        slidesPerView: 2,



        spaceBetween: 20,



        pagination: {



            el: '.wap-partner .swiper-pagination',



            clickable: true,



        },



    })







    // wap右上导航



    $(".nav li").click(function () {



        $(this).parent().parent().removeClass("in");



    })











    // 滚动监听



    $('body').scrollspy({



        target: '#navbar-example'



    })



    // top



    $(window).scroll(function () {



        if ($(window).scrollTop() > 10) {



            $(".goTop").fadeIn(1000);



            $(".navbar").addClass("navbar-fixed-top");



        } else {



            $(".goTop").fadeOut(1000);



            $(".navbar").removeClass("navbar-fixed-top");



        }



    });

    if ($(window).width() > 768) {

        var size = 200;

        Circlea(size);

    }





    $(".goTop").click(function () {



        $("html,body").animate({



            scrollTop: 0



        }, 1000);



    });

    if ($(window).width() <= 768) {

        var size = 160;

        Circlea(size);

    }







})


var submitcount3 = 0;
function beforeSubmit3(form) {
    if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else {
        if (submitcount3 == 0) {
            submitcount3++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;
        }
    }
}




var submitcount2 = 0;







function beforeSubmit2(form) {







    if (form.name.value == '') {



        alert('Name can not be empty');



        form.name.focus();



        return false;



    } else if (form.email.value == '') {



        alert('Please enter the correct email format');



        form.email.focus();



        return false;



    } else if (form.email.value.indexOf('@') < 0) {



        alert('The email is wrong');



        form.email.focus();



        return false;



    } else if (form.message.value == '') {



        alert('The message can not be empty');



        form.message.focus();



        return false;



    } else {







        if (submitcount2 == 0) {



            submitcount2++;



            return true;



        } else {



            alert("Message is being sent, please wait!");



            return false;







        }



    }







}



function Circlea(size) {

    $(window).scroll(function () {



        if ($(window).scrollTop() > 3500) {



            $("#circle1").circleChart({



                speed: 2000,



                widthRatio: 0.05,



                size: size,



                value: 100,



                color: "#005cac",



                backgroundColor: "#ccc",



                text: true,



                onDraw: function (el, circle) {



                    circle.text(Math.round(circle.value) * 12 / 100 +



                        '+' +



                        '<div>More than 12 years of experience in laser and automation</div>'







                    );



                }



            });



            $("#circle2").circleChart({



                speed: 2000,



                widthRatio: 0.05,



                size: size,



                value: 100,



                color: "#005cac",



                backgroundColor: "#ccc",



                text: true,



                onDraw: function (el, circle) {



                    circle.text((Math.round(circle.value) * 260000 / 100).toLocaleString() +



                        '<div>Production environment: 260000 square dust-free production workshop</div>'







                    );

                    //                setTimeout(function () { 

                    //                    circle.text('260,000'+'<div>Production environment: 260000 square dust-free production workshop</div>');

                    //                }, 2000);



                }



            });







            $("#circle3").circleChart({



                speed: 2000,



                widthRatio: 0.05,



                size: size,



                value: 100,



                color: "#005cac",



                backgroundColor: "#ccc",



                text: true,



                onDraw: function (el, circle) {



                    circle.text(Math.round(circle.value) * 400 / 100 +







                        '<div>Registered capital of 400 million</div>'







                    );



                }



            });







            $("#circle4").circleChart({



                speed: 2000,



                widthRatio: 0.05,



                size: size,



                value: 100,



                color: "#005cac",



                backgroundColor: "#ccc",



                text: true,



                onDraw: function (el, circle) {



                    circle.text(Math.round(circle.value) * 2000 / 100 +



                        '+' +



                        '<div>More than 2000 employees in the world</div>'







                    );



                }



            });



        }

    });



}





