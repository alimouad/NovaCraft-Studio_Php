<?php 
$nameErr = $emailErr = "";
$name = $email = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  // Validate Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  // If no errors → success
  if ($nameErr === "" && $emailErr === "") {
    $success = "Votre message a été envoyé avec succès !";
  }
}

function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}
?>

<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

    <form method="post" action=""
          class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

        <?php if (!empty($success)): ?>
            <p class="text-green-600 text-center font-semibold"><?php echo $success; ?></p>
        <?php endif; ?>

        <input type="text" name="name" placeholder="Votre nom" 
               class="w-full border px-4 py-2 rounded-lg" value="<?php echo $name; ?>">
        <span class="error text-red-600 text-sm"><?php echo $nameErr; ?></span>
        <br>

        <input type="email" name="email" placeholder="Votre email" 
               class="w-full border px-4 py-2 rounded-lg" value="<?php echo $email; ?>">
        <span class="error text-red-600 text-sm"><?php echo $emailErr; ?></span>
        <br>

        <textarea name="message" placeholder="Votre message" 
                  class="w-full border px-4 py-2 rounded-lg"></textarea>

        <input type="submit" value="Envoyer"
               class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 cursor-pointer">
    </form>
</section>
