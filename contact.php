<?php include 'header.php'; ?>
<div class="card">
    <h2>Contact Info</h2>

    <p>
        📧 <strong>Email:</strong><a href="mailto:berderakathlyn@gmail.com">berderakathlyn@gmail.com</a></p>

    <p>
        📞 <strong>Phone:</strong> 09269239962
    </p>

    <p>
        📸 <strong>Instagram:</strong><a href="https://www.instagram.com/kathysberdz" target="_blank">kathysberdz</a></p>
</div>
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
