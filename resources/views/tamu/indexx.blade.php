@extends('layouts.main')

@section('konten')
<div class="container-fluid banner">
    <div class="container banner-content col-lg-6">
        <div class="text-center">
            <div>
                <img src="/img/logo.jpg" style="border-radius: 50%; border: 5px solid #eaeaea;">
                <p class="fs-1">
                    Welcome to Great Hotel
                </p>
                <p class="d-none d-sm-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Repellat, quod eum atque et, explicabo earum sit alias quas provident, 
                    voluptate numquam. Delectus nisi architecto porro ex aspernatur alias, 
                    voluptate eveniet!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Content section 1-->
<section id="scroll">
    <div class="container px-5">
        <div class="row gx-5 align-items-center" data-aos="fade-left" data-aos-offset="350" data-aos-duration="1000">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid" src="img/kamar.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">For those about to sleep...</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 2-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center" data-aos="fade-right" data-aos-offset="320" data-aos-duration="1000">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid" src="img/kolam.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">We make you feel better than at home</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center" data-aos="fade-left" data-aos-offset="350" data-aos-duration="1000">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid" src="img/hotel.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Come, stay and enjoy your day.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<div class="height">
    <h3 class="text-center scroll"></h3>
</div>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#toTopBtn').fadeIn();
            } else {
                $('#toTopBtn').fadeOut();
            }
        });

        $('#toTopBtn').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
<script>
    gsap.from('.text-center img', { duration: 1,5, rotateY: 360, opacity: 0})
</script>
@endsection
