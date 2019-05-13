

<script>


    var TOP = true;
    $(document).ready(function () {
        $('[data-toggle="checkbox"]').radiocheck();
        $('[data-toggle="radio"]').radiocheck();
        if ($('[data-toggle="select"]').length) {
            $('[data-toggle="select"]').select2();
        }
        $(':text, textarea').placeholder();
        $('.pagination').on('click', 'a', function () {
            $(this).parent().siblings('li').removeClass('active').end().addClass('active');
        });

        $('.btn-group').on('click', 'a', function () {
            $(this).siblings().removeClass('active').end().addClass('active');
        });

        // Disable link clicks to prevent page scrolling
        $(document).on('click', 'a[href="#fakelink"]', function (e) {
            e.preventDefault();
        });

        if ($('[data-toggle="switch"]').length) {
            $('[data-toggle="switch"]').bootstrapSwitch();
        }
        $('.todo').on('click', 'li', function () {
            $(this).toggleClass('todo-done');
        });
    });

    $( window ).scroll(function() {

        var scrollPosition =  $(window).scrollTop();


        if (scrollPosition < 160) {
            //$('.gob-nav').removeClass('hidden');
            $('#navin_1').removeClass('navbar-fixed-top');
            $('.gob-nav').show();

        }else{
            // $('.gob-nav').addClass('hidden');
            $('.gob-nav').hide();

            $('#navin_1').addClass('navbar-fixed-top');




        }
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



<link href="<?=URL_BASE?>public/css/datepicker.min.css" rel="stylesheet" type="text/css">
<script src="<?=URL_BASE?>public/js/datepicker.min.js"></script>
<script src="<?=URL_BASE?>public/js/core.js"></script>
<script src="<?=URL_BASE?>public/js/upload.js"></script>
<script src="<?=URL_BASE?>public/js/uploadfun.js"></script>

<!-- Include English language -->


<!-- Bootstrap 4 requires Popper.js -->
<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>

<script src="<?=URL_BASE?>public/js/update.js"></script>




<script src="<?=URL_BASE?>public/scripts/flat-ui.js"></script>


</body>
</html>