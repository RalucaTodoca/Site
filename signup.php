<?php
  require "header.php";
?>
    <main>
      <div >
        <section >
           <?php
             if (isset($_GET['error'])) {
               if ($_GET['error'] == "emptyfields") {
                  echo '<p>Fill in all fields !</p>';
               }
               else if($_GET['error'] == "invaliduidmail"){
                 echo '<p>Invalis useranme and e-mail !</p>';
                 }
              else if($_GET['error'] == "invaliduid"){
                echo '<p>Invalid username !</p>';
              }
              else if($_GET['error'] == "invalidmail"){
                echo '<p>Invalid e-mail !</p>';
              }
              else if($_GET['error'] == "passwordcheck"){
                echo '<p>Your passwords do not match !</p>';
              }
              else if($_GET['error'] == "usertaken"){
                echo '<p>This username is already taken !</p>';
              }
             }
             else if ($_GET['signup'] == "success"){
               echo '<p>Signup successful !</p>';
             }
           ?>
           <form    action="signup.inc.php" method="post">
             <input type="text" name="uid" placeholder="Username">
             <input type="text" name="mail" placeholder="E-mail">
             <input type="password" name="pwd" placeholder="Password">
             <input type="password" name="pwd-repeat" placeholder=" Repeat password">
             <button type="submit" name="signup-submit">Signup</button>
           </form>
      </section>
    </div>
    </main>

<?php
  require "footer.php";
?>
