
<?php include "../connection/connect.php"; ?>
<?php session_start() ?>
<?php error_reporting(E_ERROR | E_PARSE); ?>




<?php include "./partials/header.php" ?>
<link rel="stylesheet" href="./stylesheets/css/createprojects.css">
</head>
<body>


<?php include "./partials/navbar.php"?>
    <div class="wrapper">
        <!-- Sidebar Holder -->

        <?php include "./partials/sidebar.php"?>

        <!-- Page Content Holder -->


        <div id="content">
          <div class="container">
            <?php if((isset($_GET['n'])) && ($_GET['n'] == '1')): ?>
             <h1 class="text-capitalize text-info">To all user</h1>
             <?php endif ?>
             <?php if((isset($_GET['n'])) && ($_GET['n'] == '2')): ?>
             <h1 class="text-capitalize text-info">To all project manager</h1>
             <?php endif ?>
              <div class="row">
                 <div class="col-10">
                      <form action="./maildb.php?n=<?php echo $_GET['n']; ?>" method="post">
                         <label for="subject">Subject*</label>
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                          <label for="msg">Message*</label>
                          <textarea type="text" class="form-control" name="msg" id="msg" placeholder="msg" required></textarea>
                         <?php if((isset($_GET['n'])) && ($_GET['n'] == '1')): ?>
                         <button class="btn btn-danger my-3" name="all" id="all">send mail</button>
                         <?php endif ?>
                         <?php if((isset($_GET['n'])) && ($_GET['n'] == '2')): ?>
                         <button class="btn btn-danger my-3" name="manager" id="manager">send mail</button>
                         <?php endif ?>
                          
                      </form>
                  </div>
              </div>
          </div>
          
        </div>

    </div>


       <?php include "./partials/script.php" ?>


<?php "./partials/footer.php"?>
