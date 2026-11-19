// Wait until the whole page has loaded before running any code
document.addEventListener("DOMContentLoaded", function () {

    // ---------- 1. MOBILE MENU ----------
    var menuToggle = document.getElementById("menuToggle");
    var mainNav = document.getElementById("mainNav");

    menuToggle.addEventListener("click", function () {
        // Add or remove the "nav-open" class to show or hide the menu
        mainNav.classList.toggle("nav-open");
    });


    // ---------- 2. FILTER BUTTONS (home page) ----------
    var filterButtons = document.querySelectorAll(".filter-button");
    var productCards = document.querySelectorAll(".product-card");

    for (var i = 0; i < filterButtons.length; i++) {
        filterButtons[i].addEventListener("click", function () {

            // Remove "active" from all buttons, then add it to the clicked one
            for (var j = 0; j < filterButtons.length; j++) {
                filterButtons[j].classList.remove("active");
            }
            this.classList.add("active");

            // Show only the cards that match the chosen mood
            var filter = this.getAttribute("data-filter");
            for (var k = 0; k < productCards.length; k++) {
                var cardMood = productCards[k].getAttribute("data-mood");
                if (filter == "all" || filter == cardMood) {
                    productCards[k].style.display = "block";
                } else {
                    productCards[k].style.display = "none";
                }
            }
        });
    }


    // ---------- 3. SCENT SUGGESTION (home page) ----------
    var recommendButton = document.getElementById("recommendButton");

    if (recommendButton) {
        recommendButton.addEventListener("click", function () {
            var mood = document.getElementById("scentMood").value;
            var text = "";

            if (mood == "fresh") {
                text = "Try a fresh, clean or citrus-inspired fragrance for an easy everyday scent.";
            } else if (mood == "sweet") {
                text = "Try a warm, sweet or amber-inspired fragrance for evenings and special plans.";
            } else {
                text = "Try a woody, spicy or oud-inspired fragrance when you want a stronger statement.";
            }

            document.getElementById("recommendation").textContent = text;
        });
    }


    // ---------- 4. ENGLISH / ISIZULU SWITCH ----------
    var languageToggle = document.getElementById("languageToggle");
    var language = "en";

    languageToggle.addEventListener("click", function () {
        // Switch between English and isiZulu
        if (language == "en") {
            language = "zu";
        } else {
            language = "en";
        }

        // Change the text of every element that has data-en and data-zu
        var elements = document.querySelectorAll("[data-en]");
        for (var i = 0; i < elements.length; i++) {
            elements[i].textContent = elements[i].getAttribute("data-" + language);
        }
    });


    // ---------- 5. CONTACT FORM CHECK (client side) ----------
    var emailField = document.getElementById("email");
    var messageField = document.getElementById("message");

    if (emailField && messageField) {
        var form = emailField.form;

        form.addEventListener("submit", function (event) {
            var email = emailField.value.trim();
            var message = messageField.value.trim();

            // Stop the form from submitting if something is wrong
            if (email.indexOf("@") == -1) {
                event.preventDefault();
                alert("Please enter a valid email address.");
            } else if (message.length < 10) {
                event.preventDefault();
                alert("Please write a message of at least 10 characters.");
            }
        });
    }

});
