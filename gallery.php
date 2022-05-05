<?php
include_once "header.php";
?>
<div class="gallery">
    <div class="content">
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="assets/images/gallery/gall1.jpg" alt=""></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/104497136_140630014327657_4070899253320356740_n_1618957172 Medium.jpeg"
                            alt=""></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/106929045_143795257344466_792293067530907464_n_1618957172 Medium.jpeg"
                            alt=""></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/116643617_153679479689377_9104356878828305248_n_1618957172 Medium.jpeg"
                            alt=""></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/118919038_167050468352278_1051010907117215228_n_1618957172 Medium.jpeg"
                            alt=""></li>
                    <li class="splide__slide"><img src="assets/images/gallery/file_1618957136 Medium.jpeg" alt=""></li>
                    <li class="splide__slide"><img src="assets/images/gallery/file1_1618957137 Medium.jpeg" alt=""></li>
                    <li class="splide__slide"><img src="assets/images/gallery/file2_1618957137 Medium.jpeg" alt=""></li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0599_1618957172 Medium.jpeg" alt="">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0601_1618957155 Medium.jpeg" alt="">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0603_1618957155 Medium.jpeg" alt="">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0605_1618957155 Medium.jpeg" alt="">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_3334_1618957172 Medium.jpeg" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/splide.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var splide = new Splide('.splide', {
        type: "loop",
        label: "Cindy's Image Gallery",
        fixedHeight: 600,
        breakpoints: {
            900: {
                destroy: true,
            }
        }

    });
    splide.mount();
});
</script>

<?php
include_once "footer.php";
?>