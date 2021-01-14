<header>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="/home">
               <span class="greekstagram-icon">
                  <img src="../images/statue.svg" id="headerIMG">
                  <div>
                     <h1 id="headerLogoText" class="">Greekstagram</h1>
                  </div>
               </span>
            </a>
         </div>
         <div class="col-md-6">
            <div class="user-info logoutInfo">
               <?php if (isset($_SESSION) && isset($_SESSION['user'])) : ?>
                  <div>
                     <a href="/me"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark m-2"><?= $_SESSION['user']['username'] ?></button></a>
                     <a href="/logout"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark m-2">Logout</button></a>
                  </div>
               <?php else : ?>
                  <div>
                     <a class="gaEensWegUnderline" href="/login"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark m-2">Login</a>
                     <a class="gaEensWegUnderline" href="/register"><button class="btn btn-lg btn-mau font-weight-bold border-white bt-dark m-2">Register</a>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</header>