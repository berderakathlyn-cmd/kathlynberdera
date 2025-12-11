<?php include 'header.php'; ?>
<main>
    <div class="highlight-box">
        <h2 class="colorful-text">About Me</h2>

        <p class="colorful-text">
            I am Kathlyn, a creative designer with passion in artworks, graphics and coding.
        </p>

        <p class="colorful-text">
            I love making aesthetic websites and digital art!
        </p>
    </div>
</main>

<body>
    
<script>
document.addEventListener("DOMContentLoaded", function() {
    const profileCard = document.querySelector(".profile-card");

    // Check current page filename
    const currentPage = window.location.pathname.split("/").pop();

    // Hide profile picture on all pages except index.php
    if (currentPage !== "index.php") {
        if (profileCard) {
            profileCard.style.display = "none";
        }
    }
});
</script>


<?php include 'footer.php'; ?>