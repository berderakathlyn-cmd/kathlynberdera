<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <h1 class="animated-title">My Portfolio</h1>

    <nav>
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="about.php"><i class="fas fa-user"></i> About</a>
        <a href="photos.php"><i class="fas fa-image"></i> Photos</a>
        <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
    </nav>
</header>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll("header nav a");
    const profileImg = document.querySelector(".profile-img");

    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            profileImg.classList.add("flip");

            setTimeout(() => {
                profileImg.classList.remove("flip");
            }, 6000); 
        });
    });
});
</script>


<main>
    <div class="profile-card">
    <img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t39.30808-6/595327612_836521362565496_3916929840712180178_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGt6wVUo1FefpFwScc4YRef_CGqRn0Z2MX8IapGfRnYxc9vozbbcYdP1IBwZxPGeswb6ZuR-Y3AiqF8UqzdZdOY&_nc_ohc=kV9ScWv8QMwQ7kNvwETUYTr&_nc_oc=AdnyQmV0x-d_topo_NzMgCNUSX4VqlGW1kmDKuJKLzRSeuOZD4VUd2Yda1hTElcwP-0&_nc_zt=23&_nc_ht=scontent.fcgy2-2.fna&_nc_gid=5TCp2P4nO77m8WsPjKIEdw&oh=00_AflCb9e6tzyaEXs8jnc_Ix-vXxtdEoxp8D1rQZx4sVBZuA&oe=693D539D" alt="My Profile" class="profile-img">
    <h2 class="wave-text">
        <span>S</span><span>a</span><span>l</span><span>v</span><span>e</span><span>!</span>
        <span> </span>
        <span>i</span><span>o</span>
        <span> </span>
        <span>s</span><span>o</span><span>n</span><span>o</span>
        <span> </span>
        <span>K</span><span>a</span><span>t</span><span>h</span><span>l</span><span>y</span><span>n</span>
    </h2>

 <p class="intro-text">
    <span class="designer-shadow">I am your designer</span>
</p>
</div>


