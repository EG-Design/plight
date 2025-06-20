document.addEventListener(
  "invalid",
  (function () {
    return function (e) {
      e.preventDefault();
      document.getElementsByTagName("input").focus();
    };
  })(),
  true
);

var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("loadingbar");
    var width = 1;
    var id = setInterval(frame, 70);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

// Overview Password Function

function overviewlogin(event) {
  event.preventDefault();
  const correctPassword = "4430971";
  const input = document.getElementById("overview-password").value;

  if (input === correctPassword) {
    window.location.href = "4430971-overview.html";
  } else {
  }
}

// Universe Password Function

function universelogin(event) {
  event.preventDefault();
  const correctPassword = "3790572";
  const input = document.getElementById("universe-password").value;

  if (input === correctPassword) {
    window.location.href = "3790572-universe.html";
  } else {
  }
}

// Factions Password Function

function factionslogin(event) {
  event.preventDefault();
  const correctPassword = "8915534";
  const input = document.getElementById("factions-password").value;

  if (input === correctPassword) {
    window.location.href = "8915534-factions.html";
  } else {
  }
}

// Map Password Function

function maplogin(event) {
  event.preventDefault();
  const correctPassword = "#";
  const input = document.getElementById("map-password").value;

  if (input === correctPassword) {
    window.location.href = "#";
  } else {
  }
}

// Corrupt Password Function

function corruptlogin(event) {
  event.preventDefault();
  const correctPassword = "#";
  const input = document.getElementById("corrupt-password").value;

  if (input === correctPassword) {
    window.location.href = "#";
  } else {
  }
}

// Template Password Function

function templatelogin(event) {
  event.preventDefault();
  const correctPassword = "#";
  const input = document.getElementById("template-password").value;

  if (input === correctPassword) {
    window.location.href = "#";
  } else {
  }
}
