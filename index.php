<?php include 'header.php'; ?>
<div class="highlight-box">
    <h2 class="colorful-text">Welcome to My Portfolio</h2>

    <p class="colorful-text">
        This is my home page. Explore my photos, learn about me, or get in touch.
    </p>
</div>

<body class="home-bg">

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


</div>
<?php include 'footer.php'; ?>