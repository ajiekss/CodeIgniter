 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
         <a class="navbar-brand" href="#">RandomForest</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                 <a class="nav-item nav-link <?= $set == 'home' ? 'active' : ''; ?>" href="/">Home <span class="sr-only">(current)</span></a>
                 <a class="nav-item nav-link <?= $set == 'about' ? 'active' : ''; ?>" href="/pages/about">About</a>
                 <a class="nav-item nav-link <?= $set == 'contact' ? 'active' : ''; ?>" href="/pages/contact">Contact</a>
                 <a class="nav-item nav-link <?= $set == 'data' ? 'active' : ''; ?>" href="/data">Data</a>
             </div>
         </div>
     </div>
 </nav>