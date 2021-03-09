<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt"></div>
        <div class="field input">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="Enter email" />
        </div>
        <div class="field input">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter password" />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" id="submit" value="Continue for chat" />
        </div>
      </form>
      <div class="link">
        Don't have an account ? <a href="index.php">Sign up Now</a>
      </div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>

</html>