<?php include "./layout/header.php" ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Welcome to SolutionBuggy</h1>
        <p>Your one-stop solution for industry projects and expert connections.</p>
        <form class="search-bar">
            <input type="text" placeholder="Search for experts, projects, or services...">
            <button type="submit">Search</button>
        </form>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <h2>About Us</h2>
        <p>We connect businesses with industry experts for seamless project execution and industrial growth.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service">
                <h3>Expert Consulting</h3>
                <p>Connect with industry experts for tailored solutions.</p>
            </div>
            <div class="service">
                <h3>Project Management</h3>
                <p>Post your projects and find the right professionals to execute them.</p>
            </div>
            <div class="service">
                <h3>Engineering Solutions</h3>
                <p>Access innovative engineering solutions for your business.</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <h2>Recent Projects</h2>
        <div class="project-list">
            <div class="project">
                <h3>Manufacturing Optimization</h3>
                <p>A project focused on improving manufacturing efficiency.</p>
            </div>
            <div class="project">
                <h3>Supply Chain Management</h3>
                <p>Redesigning supply chain workflows for cost reduction.</p>
            </div>
            <div class="project">
                <h3>Automation Integration</h3>
                <p>Implementing automation in industrial processes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<?php include "./layout/footer.php" ?>