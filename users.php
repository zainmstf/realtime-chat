<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>;

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <?php  ?>
        <div class="content">
          <img src="images/img-1.jpg" alt="" />
          <div class="details">
            <span>Coding Nepal</span>
            <p>Active Now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Pilih user untuk memulai chat</span>
        <input type="text" placeholder="Masukkan nama untuk cari" />
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="images/img-1.jpg" alt="" />
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is text message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
  </div>
  <script src="javascript/users.js"></script>
</body>

</html>