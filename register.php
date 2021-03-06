<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>
<?php
include_once "header.php";
?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="fname" placeholder="First Name" required />
          </div>
          <div class="field input">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="lname" placeholder="Last name" required />
          </div>
        </div>
        <div class="field input">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="Enter email" required />
        </div>
        <div class="field input">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter password" required />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label for="choose_image">Choose Image</label>
          <input type="file" id="choose_image" name="image" />
        </div>
        <div class="field button">
          <input type="submit" id="submit" value="Continue for chat" />
        </div>
      </form>
      <div class="link">
        Already Register ? <a href="/realtime-chat">Sign in Now</a>
      </div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>

</html>