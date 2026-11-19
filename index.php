<?php
$pageTitle = "Campus Scents | Affordable fragrances for student life";
include "includes/header.php";
?>

<main>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-text">
            <p class="eyebrow" data-en="YOUR SCENT. YOUR BUDGET." data-zu="IPHUNGA LAKHO. ISABELO SAKHO.">YOUR SCENT. YOUR BUDGET.</p>
            <h1 data-en="Smell good. Spend smart." data-zu="Nuka kamnandi. Sebenzisa imali ngobuhlakani.">Smell good. Spend smart.</h1>
            <p data-en="Discover affordable fragrances for lectures, dates, parties and every day in between." data-zu="Thola amakha angabizi kakhulu okufunda, izinsuku zokuphola, amaphathi nezinsuku zonke.">Discover affordable fragrances for lectures, dates, parties and every day in between.</p>
            <a class="button" href="#featured" data-en="Explore fragrances" data-zu="Bheka amakha">Explore fragrances</a>
            <a class="button button-outline" href="about.php" data-en="Our story" data-zu="Indaba yethu">Our story</a>
        </div>
        <img class="hero-image" src="assets/images/hero.jpg" alt="Perfume bottle with white flowers on an orange background">
    </section>

    <!-- INTRO SECTION -->
    <section class="section intro">
        <h2>Great fragrance doesn't have to cost a fortune.</h2>
        <p>Campus Scents helps students explore affordable fragrance options, including selections from Lattafa and Fragrance World. Choose a scent that fits your style and your budget.</p>
    </section>

    <!-- FRAGRANCE CARDS WITH FILTER BUTTONS (JavaScript feature 1) -->
    <section class="section" id="featured">
        <h2>Find a scent for your mood</h2>
        <p>Use the buttons to filter the fragrance styles.</p>

        <div class="filter-bar">
            <button class="filter-button active" data-filter="all">All moods</button>
            <button class="filter-button" data-filter="fresh">Fresh</button>
            <button class="filter-button" data-filter="sweet">Sweet</button>
            <button class="filter-button" data-filter="bold">Bold</button>
        </div>

        <div class="product-grid">
            <div class="product-card fresh-card" data-mood="fresh">
                <img src="assets/images/light-bottle.jpg" alt="Light fresh fragrance bottle with white flowers">
                <h3>Fresh &amp; Clean</h3>
                <p>Light, easy-going fragrance styles for lectures, errands and daily wear.</p>
                <small>Mood: confident and effortless</small>
            </div>
            <div class="product-card sweet-card" data-mood="sweet">
                <img src="assets/images/amber-bottle.jpg" alt="Warm amber fragrance bottle surrounded by flowers">
                <h3>Warm &amp; Sweet</h3>
                <p>Comforting gourmand and amber-inspired styles for evenings and special plans.</p>
                <small>Mood: warm and inviting</small>
            </div>
            <div class="product-card bold-card" data-mood="bold">
                <img src="assets/images/collection.jpg" alt="Row of perfume bottles with dark caps">
                <h3>Deep &amp; Bold</h3>
                <p>Rich, woody and spicy fragrance styles for when you want to stand out.</p>
                <small>Mood: strong and memorable</small>
            </div>
        </div>

        <p class="small-note">Availability and prices can change. Contact us for current stock and pricing.</p>
    </section>

    <!-- SCENT SUGGESTION (JavaScript feature 2) -->
    <section class="section suggestion-box">
        <h2>Get a quick scent suggestion</h2>
        <p>Choose the vibe that sounds most like you.</p>

        <label for="scentMood">My scent mood is...</label>
        <select id="scentMood">
            <option value="fresh">Fresh and clean</option>
            <option value="sweet">Sweet and warm</option>
            <option value="bold">Bold and woody</option>
        </select>
        <button class="button" id="recommendButton">Suggest a style</button>

        <p id="recommendation">Your suggestion will appear here.</p>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta-band">
        <h2>Your next signature scent could be one message away.</h2>
        <a class="button button-light" href="contact.php">Ask about stock</a>
    </section>

</main>

<?php include "includes/footer.php"; ?>
