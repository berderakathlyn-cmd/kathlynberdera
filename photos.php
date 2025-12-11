<?php include 'header.php'; ?>
<div class="card">
<h2>My Photos</h2>
<img src="https://scontent.fcgy2-1.fna.fbcdn.net/v/t39.30808-6/476867127_602394119311556_3342574037858854066_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEQoF8P2sQ36-sYgA9IXHAedfZuv25pPuV19m6_bmk-5YSOkpSwe-PzVXMgpOAcspsisqUuf0LuP8bhrGKDTh1M&_nc_ohc=UP7MQvslXCMQ7kNvwEzSxsX&_nc_oc=Adl4q-te7-BeivQSO9rG7tGcD_up9LPKlDyrpwYBp5HinCra1EjJ5chYWzkKiInRjQg&_nc_zt=23&_nc_ht=scontent.fcgy2-1.fna&_nc_gid=QDimt1S27m__03Hc4jLHVA&oh=00_AfmF-BjcKJhPhztyu8hXzRpH1_BbaKA0W0Bc439dE6K3Sw&oe=693D75CC" class="photo" alt="Photo 1" onclick="openLightbox(this.src)">
<img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t39.30808-6/535679439_744784728405827_5824963852215128338_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFvzL0cTWtW3YF8-zfQ7YBtqKfZ9D8OnNOop9n0Pw6c0ym1sAkip0ZxU-k3JU9zkXk9PmmyFh-P3DP6M1c7W952&_nc_ohc=cHUJo5UAlHMQ7kNvwHFMI5U&_nc_oc=AdkaSvKimAsg5YLUf12Nw5jrdpe9Ie9w3eQEdjO9XFEKQCDVN5YzHJNtnkFOth5dh4M&_nc_zt=23&_nc_ht=scontent.fcgy2-2.fna&_nc_gid=RDfwLozmrf2VfLJdCxmCiw&oh=00_AfmRlH-uiQfJR7nLy3Y3iLXSeK9XVyUt7z-0trcNIbMxHA&oe=693D90A7" class="photo" alt="Photo 2"onclick="openLightbox(this.src)">
<img src="https://scontent.fcgy2-1.fna.fbcdn.net/v/t39.30808-6/473186859_580529838164651_5650624768136280201_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGyJShAEbhXe_kiwPyo9lFrhLayV4c0OEmEtrJXhzQ4Sdojm6Qe89SRYWQ1Nqa4MIEyhoOOCEsDGqcn-USMBP9K&_nc_ohc=iIEU6d1yy0UQ7kNvwHbpsZ_&_nc_oc=Adn5b40HHBdKkFBQuCjqyZSOPxy-GpEeEDZx01OBeLgRKh6YOY33abT61ZBpxQJTheA&_nc_zt=23&_nc_ht=scontent.fcgy2-1.fna&_nc_gid=oZDLq-YGuU9iksn9ZZO3zQ&oh=00_AfltdJEgagfZaDfHe4CoyBQo77Z4s3bA8RzuWmzTIEL8sQ&oe=693DA9D7" class="photo" alt="Photo 3"onclick="openLightbox(this.src)">
<img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t39.30808-6/481123069_620299297521038_908632655106774521_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEBh3f_34L3W-ShmLRf0RqcX1GlIiGzDX9fUaUiIbMNf6SIPRH4RBv21VuJQ_0ndNid00qhcERE9c13Ej41UzIi&_nc_ohc=Nmty-mOyNiYQ7kNvwEW88zf&_nc_oc=AdkOn8aHnNGTSSGkZTNoRxu635TIMrBvrSzV67cMncsPFXAYmme8Wvkocs7-KVPtIQo&_nc_zt=23&_nc_ht=scontent.fcgy2-2.fna&_nc_gid=9qIibREeWtQpLiRwvwcOIg&oh=00_AfmnQw6ZYYo6Lp9-Tfbpylicd1qW4k6RNLYGL2MqzQB85g&oe=693D7946" class="photo" alt="Photo 4"onclick="openLightbox(this.src)">
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


<div id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-img" src="">
</div>


<script>
function openLightbox(src) {
    document.getElementById('lightbox').style.display = 'flex';
    document.getElementById('lightbox-img').src = src;
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}
</script>
<?php include 'footer.php'; ?>
