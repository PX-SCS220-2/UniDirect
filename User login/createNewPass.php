<?php
  require "header.php";


?>


        <main>
            <div class="wrapper-main">
                <section class="section-default">

                    <?php
                    $selector = $_GET["selector"];
                    $validator = $_GET["validator"];

                    if(empty($selector) || empty($validator)){
                        echo "Could not validate your request!";
                    }else{
                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {

                    }
                    }
                    ?>

                  <form action="includes/UserForgetPass.php" method="post">
                      <input type="hidden" name="selector" value="<?php echo $selector?>">
                      <input type="hidden" name="validator" value="<?php echo $validator?>">
                      <input type="password" name="pwd" placeholder="Enter a new password...">
                      <input type="password" name="pwd-repeat" placeholder="Confirm a new password...">
                     <button type="submit" name="submit">Reset Password</button>

                  </form>

                </section>

            </div>
        </main>