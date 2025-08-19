<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input = $_POST['overview-password'] ?? '';
  $overviewPassword = "4430971";
  if ($input === $overviewPassword) {
    header(header: "Location: 4430971-overview.html");
    exit();
  } else {
    $error = "Incorrect password.";
  }
}
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Define a map of form names to passwords and their redirect pages
//     $forms = [
//         'overview' => ['password' => '4430971', 'redirect' => '4430971-overview.html'],
//         'universe' => ['password' => '991234', 'redirect' => '991234-settings.html'],
//         'profile' => ['password' => '7788123', 'redirect' => '7788123-profile.html'],
//     ];

//     // Determine which form was submitted
//     $formName = $_POST['form_name'] ?? '';
//     $input = $_POST['password'] ?? '';

//     if (isset($forms[$formName])) {
//         $expectedPassword = $forms[$formName]['password'];
//         $redirectPage = $forms[$formName]['redirect'];

//         if ($input === $expectedPassword) {
//             header("Location: $redirectPage");
//             exit();
//         } else {
//             $error = "Incorrect password for $formName.";
//         }
//     } else {
//         $error = "Unknown form submitted.";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/plightcss.css" />
  <link rel="stylesheet" href="https://use.typekit.net/ayr5udo.css" />
  <link rel="icon" href="images/plightIcon.ico" />
  <title>Plight-Databank</title>
  <style>
    button,
    input {
      margin-left: 0.5rem;
      float: right;
    }

    header ul li div {
      width: fit-content;
    }
  </style>
</head>

<body class="crt">
  <header>
    <ul>
      <li>
        <p>PLIGHT OS VERSION 1.72</p>
      </li>
      <li>
        <p>DATABANK</p>
      </li>
      <li>
        <div><a href="index.html">INDEX</a></div>
      </li>
    </ul>
  </header>
  <main>
    <div class="databank">
      <!--AES Card-->
      <div class="card">
        <h2 class="l-text">ENCRYPTION:</h2>
        <p>
          PLIGHT standard encryption v1.06
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="aes-encryption-password" />
        </form>
      </div>
      <!-- Corrupt Card-->
      <div class="card">
        <h2 class="l-text">[]II[II][[]]:</h2>
        <p>
          []]II[]] [Ċ̶̢̥̬̬͎̹̭̏͜ͅO̸̡̧̬͎̻̼̘̙̔̒͋̔̽ͅR̴̡̙̱̦̣̓̇̄̓̊́̂̌̈́R̷̢̬̩̲̗̯͚̱̓̂U̸͓̙̦͆̆͊̕P̵̛̟̳͕͊̀̏͗͒͘T̷̤͉̗̪͎͌͊͝ͅ] III[]]I ][[II]]
          Ḑ̴̨̦̟̖̜̺̥͈̀̊Ȩ̸͓̪͕͉̰̣͓͋̾L̷̻̤̤̪̞͐E̸̯͓̞̫̲͙̙̘̫̳͆̓͝T̶̹̦̳̭̳̪̂͐͗̕E̶̢̯̯̼͕̪̜͕͝ []]]]II ][[II
        </p>
        <form method="POST" action="">
          <button type="submit">II()[II]]I()[</button>
          <input type="password" id="corrupt-password" />
        </form>
      </div>
      <!--Lore Card-->
      <div class="card">
        <h2 class="l-text">INFORMATION:</h2>
        <p>
          PLIGHT file storage v2.03
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="lore-password" />
        </form>
      </div>
      <!--Map Card-->
      <div class="card">
        <h2 class="l-text">MAP:</h2>
        <p>
          PLIGHT system map v1.78
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="map-password" />
        </form>
      </div>
      <!--Overview Card-->
      <div class="card">
        <h2 class="l-text">OVERVIEW:</h2>
        <p>
          PLIGHT basic overview v1.0
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="overview-password" name="overview-password"/>
        </form>
      </div>
      <!--Space Battle Card-->
      <div class="card">
        <h2 class="l-text">COMBAT SIM:</h2>
        <p>
          PLIGHT experimental combat simulator v0.21
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="terminal-password" />
        </form>
      </div>
      <!--Terminal Card-->
      <div class="card">
        <h2 class="l-text">TERMINAL:</h2>
        <p>
          PLIGHT standard terminal interface v1.31
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="terminal-password" />
        </form>
      </div>
      <!--End of Cards-->
    </div>
  </main>
</body>
<script src="script/document.js"></script>

</html>