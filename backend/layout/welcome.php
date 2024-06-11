<div class="welcome-section text-center" style="background-image: url('frontend/img/try.jpg');">
    <div class="overlay"></div>
    <div class="content">
        <h1>Welcome to muscle target!</h1>
        <p>Are you ready to work out?</p>
        <a href="#" id="scroll-down-btn" class="btn btn-primary">Let's go!</a>
    </div>
</div>

<!-- js script for the button to scroll down when clicked on -->
<script>
    document.getElementById('scroll-down-btn').addEventListener('click', function(e) {
        e.preventDefault(); 

        const offsetTop = window.innerHeight; 

        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    });
</script>
