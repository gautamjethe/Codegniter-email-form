<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Email Demo</title>
  <link rel="stylesheet" href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>
<div class="mb-3">
<div class="sticky-top">
                <header class="navbar navbar-expand-md navbar-dark sticky-top d-print-none">
                  <div class="container-xl">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-expanded="false">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                      <a href="/"> EMAILER</a>
                    </h1>
                    <div class="navbar-nav flex-row order-md-last">
                      <div class="nav-item d-none d-md-flex me-3">
                        
                      </div>
                      
                      
                    </div>
                  </div>
                </header>
                <div class="navbar-expand-md">
                  <div class="navbar-collapse collapse" id="navbar-menu" >
                    <div class="navbar navbar-light">
                      <div class="container-xl">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="/">
                              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                              </svg>
                              </span>
                              <span class="nav-link-title">
                                Home
                              </span>
                            </a>
                          </li>                                           
                                                   
                        </ul>
                        
                      </div>
                    </div>
                  </div>
</div>
</div>
</div>
<body>
  


  <div class="container mt-5">
    <form method="post" action="<?php echo base_url('SendMail') ?>">
    <div class="form-group">
        <label>Name</label><br>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
      </div><br>

      <div class="form-group">
        <label>Email</label><br>
        <input type="email" name="mailTo" class="form-control" placeholder="Enter Email" required>
      </div><br>
       
      <div class="form-group">
        <label>Subject</label><br>
        <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
      </div><br>
      <div class="form-group">
        <label>Message</label><br>
        <textarea rows="6" type="text" name="message" class="form-control" placeholder="Enter Message" required></textarea>
      </div><br>
      <div class="form-group">
       <center> <button type="submit" class="btn btn-primary btn-block">Submit</button></center>
      </div>
    </form>
  </div>
  <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>