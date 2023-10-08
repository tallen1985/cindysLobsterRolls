<?php
include_once "header.php";
?>
<!-- <div class="newItem">
    <img src="assets/images/newImages/fishTaco.jpg" alt="fish taco">
    <h2>Try Our New Fish Tacos!</h2>
</div> -->
<div class="closedModal">
    <div class="content">
        <h1>Closed for the Season</h1>
        <p>Cindy's Lobster Rolls is wrapping up another fantastic season! 
            As we close for the season, we want to extend our sincerest thanks for your incredible support and loyalty. 
            We've had an amazing time serving you our mouthwatering lobster rolls and seafood specialties this summer.</p>
        <button class="js-close-modal cta-btn">Close</button>
    </div>

</div>

<style>
.closedModal {
    position: fixed;
    height: 100%;
    width: 100%;
    background-color: rgba(255, 255, 255, .4);
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.closedModal>.content {
    width: 50%;
    border-radius: 30px;
    background-color: #000;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2em;
}

.closedModal>.content .cta-btn {
    background-color: rgb(156, 4, 18);
    color: white;
    border: 2px solid white;
    transition: all .3s ease-in-out;
    padding: .5em 2em;
    border-radius: 15px;

}

.closedModal>.content .cta-btn:hover {
    background-color: white;
    color: rgb(156, 4, 18);

}
</style>
<script>
document.querySelector('.js-close-modal').addEventListener('click', () => {
    document.querySelector('.closedModal').style.display = "none";
})
</script>
<?php include "menu-snippet.php"; ?>
<?php include "contact.php" ?>
<?php
include_once "footer.php";
?>