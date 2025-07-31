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
      <!--Overview Card-->
      <div class="card">
        <h2 class="l-text">OVERVIEW:</h2>
        <p>
          Data cell [GOOD] - base data, no concern unless update on [RHUNE]
          can be confirmed.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="overview-password" name="overview-password"/>
        </form>
      </div>
      <!--Universe Card-->
      <div class="card">
        <h2 class="l-text">UNIVERSE:</h2>
        <p>
          Data cell [GOOD] - outside sources refer to unknown construct
          [RHUNE]. More Data required, breach if necessary.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="universe-password" />
        </form>
      </div>
      <!--Factions Card-->
      <div class="card">
        <h2 class="l-text">FACTIONS:</h2>
        <p>
          Data cell [GOOD] - logistics in good standing, do not intercept.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="factions-password" />
        </form>
      </div>
      <!--Map Card-->
      <div class="card">
        <h2 class="l-text">MAP:</h2>
        <p>
          Data cell [WARNING FALSE CORE] - false core warning disregard,
          reassembled data disrupted by gravity well.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="map-password" />
        </form>
      </div>
      <!-- Corrupt Card-->
      <div class="card">
        <h2 class="l-text">[]II[II][[]]:</h2>
        <p>
          []]II[]] [Ċ̶̢̥̬̬͎̹̭̏͜ͅO̸̡̧̬͎̻̼̘̙̔̒͋̔̽ͅR̴̡̙̱̦̣̓̇̄̓̊́̂̌̈́R̷̢̬̩̲̗̯͚̱̓̂U̸͓̙̦͆̆͊̕P̵̛̟̳͕͊̀̏͗͒͘T̷̤͉̗̪͎͌͊͝ͅ] -
          III[]]II]][[II]] Ḑ̴̨̦̟̖̜̺̥͈̀̊Ȩ̸͓̪͕͉̰̣͓͋̾L̷̻̤̤̪̞͐E̸̯͓̞̫̲͙̙̘̫̳͆̓͝T̶̹̦̳̭̳̪̂͐͗̕E̶̢̯̯̼͕̪̜͕͝ []]]]II ][[II]
          ]][[II]
          I]I[]].
        </p>
        <form method="POST" action="">
          <button type="submit">II()[II]]I()[</button>
          <input type="password" id="corrupt-password" />
        </form>
      </div>
      <!--Magic Card-->
      <div class="card">
        <h2 class="l-text">MAGIC:</h2>
        <p>
          Data cell [NOT FOUND] - error, no data found on subject.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--Template Card-->
      <div class="card">
        <h2 class="l-text">TEMPLATE:</h2>
        <p>
          Data cell [ASSEMBLING 12% DONE] - data construct in progress do not
          interfere.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--Template Card-->
      <div class="card">
        <h2 class="l-text">TEMPLATE:</h2>
        <p>
          Data cell [ASSEMBLING 0% DONE] - data construct in progress do not
          interfere.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--Template Card-->
      <div class="card">
        <h2 class="l-text">TEMPLATE:</h2>
        <p>
          Data cell [ASSEMBLING 0% DONE] - data construct in progress do not
          interfere.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--Template Card-->
      <div class="card">
        <h2 class="l-text">TEMPLATE:</h2>
        <p>
          Data cell [ASSEMBLING 0% DONE] - data construct in progress do not
          interfere.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--Template Card-->
      <div class="card">
        <h2 class="l-text">TEMPLATE:</h2>
        <p>
          Data cell [ASSEMBLING 0% DONE] - data construct in progress do not
          interfere.
        </p>
        <form method="POST" action="">
          <button type="submit">CONFIRM</button>
          <input type="password" id="template-password" />
        </form>
      </div>
      <!--End of Cards-->
    </div>
  </main>
</body>
<script src="script/document.js"></script>

</html>