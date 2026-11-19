<?php
$pageTitle = "Contact Campus Scents";

// Variables to hold the form data, errors and success status
$name = "";
$email = "";
$subject = "";
$message = "";
$errors = [];
$success = false;

// This code only runs after the form has been submitted (POST method)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the data from the form and remove extra spaces
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Server-side validation
    if ($name == "") {
        $errors[] = "Please enter your name.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if ($subject == "") {
        $errors[] = "Please choose a subject.";
    }
    if (strlen($message) < 10) {
        $errors[] = "Please write a message of at least 10 characters.";
    }

    // If there are no errors the form is valid
    if (count($errors) == 0) {
        $success = true;

        // Clear the form fields
        $name = "";
        $email = "";
        $subject = "";
        $message = "";
    }
}

include "includes/header.php";
?>

<main>

    <section class="page-hero">
        <h1>Let's talk fragrance.</h1>
        <p>Ask about current stock, prices, recommendations or how to place an order.</p>
    </section>

    <section class="section contact-layout">

        <!-- Contact details -->
        <div class="contact-details">
            <h2>Send us a message</h2>
            <p><strong>Location:</strong> Vanderbijlpark, Gauteng, South Africa</p>
            <p><strong>Email:</strong> campus.scents@example.com (demo address)</p>
            <p><strong>Phone / WhatsApp:</strong> add your number here</p>
        </div>

        <!-- Contact form -->
        <div class="form-card">

            <?php if ($success) { ?>
                <div class="notice success">
                    <strong>Thank you!</strong>
                    <p>Your form passed validation. (Email sending is not set up in this student project.)</p>
                </div>
            <?php } ?>

            <?php if (count($errors) > 0) { ?>
                <div class="notice error">
                    <strong>Please check the following:</strong>
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form method="post" action="contact.php">

                <label for="name">Your name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

                <label for="email">Email address</label>
                <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

                <label for="subject">What can we help with?</label>
                <select id="subject" name="subject">
                    <option value="">Choose a topic</option>
                    <option value="Stock and prices" <?php if ($subject == "Stock and prices") { echo "selected"; } ?>>Stock and prices</option>
                    <option value="Scent recommendation" <?php if ($subject == "Scent recommendation") { echo "selected"; } ?>>Scent recommendation</option>
                    <option value="Order enquiry" <?php if ($subject == "Order enquiry") { echo "selected"; } ?>>Order enquiry</option>
                    <option value="Other" <?php if ($subject == "Other") { echo "selected"; } ?>>Other</option>
                </select>

                <label for="message">Your message</label>
                <textarea id="message" name="message" rows="5"><?php echo htmlspecialchars($message); ?></textarea>

                <button class="button" type="submit">Submit enquiry</button>
            </form>
        </div>

    </section>

</main>

<?php include "includes/footer.php"; ?>
