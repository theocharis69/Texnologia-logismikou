<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <h2>Pnp & Nodas</h2>
      <nav>
        <a href="signup.php" class="nav-link">Sign Up</a>
        <a href="login.php" class="nav-link">Log In</a>
        <button id="theme-toggle">Change to Dark</button>
      </nav>
    </header>
    <main>
      <div class="accordion-container">
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header">Who are we?</button>
            <div class="accordion-content">
              <p>We are a programming students team that we have developed this list management website.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button class="accordion-header">Where can i find the source code of this project?</button>
            <div class="accordion-content">
              <p>You can find the code <a href="https://github.com/theocharis69/Texnologia-logismikou" target="_blank" class="nav-link" style="color: blue;">Here</a></p>
              
            </div>
          </div>
          <div class="accordion-item">
            <button class="accordion-header">Accordion 3</button>
            <div class="accordion-content">
              <p>Content for Accordion 3.</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="cookie-consent">
        <p>
          This website uses cookies to ensure you get the best experience. By
          continuing to use this website, you agree to our cookie policy.
        </p>
        <button id="cookie-consent-close">Close</button>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
