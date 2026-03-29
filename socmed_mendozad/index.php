<?php include 'views/header.php';?>

           <div class="registration_form">
               <p class="title">Signup</p>
               <form action="models/register_account.php" method="POST">
                   <label for="email">Email</label>
                       <input type="email" name="email" id="email" placeholder="charissemae06@gmail.com">
                   <label for="firstname">First name</label>
                       <input type="text" name=firstname id="firstname " placeholder="Charisse">
                   <label for="lastname">Last name</label>
                       <input type="text" name=lastname id="lastname " placeholder="Mae">
                   <label for="password">Password</label>
                       <input type="password" name=password id="password">
                   <label for="cpassword">Confirm Password</label>
                       <input type="password" name=cpassword id="cpassword ">
                       <input type="submit" value="Signup">

               </form>
           </div>

<?php include 'views/footer.php';