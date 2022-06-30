<?php
include_once "header.php";
?>
<div class="gallery">
    <div class="content">
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="assets/images/newImages/couple.jpg" alt=""></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/104497136_140630014327657_4070899253320356740_n_1618957172 Medium.jpeg"
                            alt="road sign"></li>
                    <li class="splide__slide"><img src="assets/images/newImages/basket.jpg"
                            alt="Delicious Basket of Fried Goodness"></li>
                    <li class="splide__slide"><img
                            src="assets/images/gallery/116643617_153679479689377_9104356878828305248_n_1618957172 Medium.jpeg"
                            alt="parking lot"></li>
                    <li class="splide__slide"><img src="assets/images/newImages/tacoAndRoll.jpg"
                            alt="Fish Taco and Roll"></li>
                    <li class="splide__slide"><img src="assets/images/newImages/shrimpRoll.jpg" alt="Shrimp Roll"></li>
                    <li class="splide__slide"><img src="assets/images/gallery/file1_1618957137 Medium.jpeg"
                            alt="basket of fried shrimp"></li>
                    <li class="splide__slide"><img src="assets/images/gallery/file2_1618957137 Medium.jpeg"
                            alt="fried clams, coleslaw and fries"></li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0599_1618957172 Medium.jpeg"
                            alt="crabmeat salad and tater tots">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0601_1618957155 Medium.jpeg"
                            alt="lobster rolls">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0603_1618957155 Medium.jpeg"
                            alt="fried clams">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_0605_1618957155 Medium.jpeg"
                            alt="clam chowder">
                    </li>
                    <li class="splide__slide"><img src="assets/images/gallery/IMG_3334_1618957172 Medium.jpeg"
                            alt="cindys from the road">
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