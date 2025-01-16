<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <div class="login-container">
    <form class="login-form" action="proses_login.php" method="POST">
      <div class="icon">
        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.07692 5.92648C5.07692 4.38908 6.33971 3.14278 7.89744 3.14278H12C12.4248 3.14278 12.7692 3.48268 12.7692 3.90197C12.7692 4.32126 12.4248 4.66116 12 4.66116H7.89744C7.18938 4.66116 6.61539 5.22766 6.61539 5.92648V6.93873C6.61539 7.35802 6.27099 7.69792 5.84615 7.69792C5.42132 7.69792 5.07692 7.35802 5.07692 6.93873V5.92648ZM5.84615 16.3021C6.27099 16.3021 6.61539 16.642 6.61539 17.0613V18.0735C6.61539 18.7723 7.18938 19.3388 7.89744 19.3388H12C12.4248 19.3388 12.7692 19.6788 12.7692 20.098C12.7692 20.5173 12.4248 20.8572 12 20.8572H7.89744C6.33971 20.8572 5.07692 19.6109 5.07692 18.0735V17.0613C5.07692 16.642 5.42132 16.3021 5.84615 16.3021Z" fill="#959597"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7692 4.78618C12.7692 3.90491 13.6592 3.29355 14.4966 3.59962L19.6248 5.47416C20.1277 5.658 20.4615 6.13139 20.4615 6.66071V17.3393C20.4615 17.8686 20.1277 18.342 19.6248 18.5258L14.4966 20.4004C13.6592 20.7065 12.7692 20.0951 12.7692 19.2138V4.78618ZM15.0309 2.17576C13.1887 1.5024 11.2308 2.84738 11.2308 4.78618V19.2138C11.2308 21.1526 13.1887 22.4976 15.0309 21.8242L20.1591 19.9497C21.2656 19.5452 22 18.5038 22 17.3393V6.66071C22 5.4962 21.2656 4.45475 20.1591 4.0503L15.0309 2.17576Z" fill="#959597"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.32787 9.43867C6.62827 9.14218 7.11532 9.14218 7.41572 9.43867L9.46701 11.4632C9.76741 11.7597 9.76741 12.2403 9.46701 12.5368L7.41572 14.5613C7.11532 14.8578 6.62827 14.8578 6.32787 14.5613C6.02746 14.2649 6.02746 13.7842 6.32787 13.4877L7.06599 12.7592H2.76923C2.3444 12.7592 2 12.4193 2 12C2 11.5807 2.3444 11.2408 2.76923 11.2408H7.06599L6.32787 10.5123C6.02746 10.2158 6.02746 9.73515 6.32787 9.43867Z" fill="#959597"></path>
          </g>
        </svg>
      </div>

      <h1>Welcome!</h1>
      <p class="subtitle">Please log in to start your session</p>

      <?//php if ($error): ?>
        <!-- <div class="error-message"><?//php echo htmlspecialchars($error); ?></div> -->
      <?//php endif; ?>
      
      <div class="form-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
      </div>
  
      <div class="form-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>  
      </div>
  
      <button type="submit" name="submit">Submit</button>
    </form>   
  </div>
  <!-- <script src=""></script> -->
</body>

</html>