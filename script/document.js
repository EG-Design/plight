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

// AES Encryption/Decryption

async function getKey(password, salt) {
        const enc = new TextEncoder();
        const keyMaterial = await window.crypto.subtle.importKey(
          "raw",
          enc.encode(password),
          { name: "PBKDF2" },
          false,
          ["deriveKey"]
        );
        return await window.crypto.subtle.deriveKey(
          {
            name: "PBKDF2",
            salt: salt,
            iterations: 100000,
            hash: "SHA-256",
          },
          keyMaterial,
          { name: "AES-GCM", length: 256 },
          false,
          ["encrypt", "decrypt"]
        );
      }

      async function encrypt(text, password) {
        const enc = new TextEncoder();
        const iv = crypto.getRandomValues(new Uint8Array(12));
        const salt = crypto.getRandomValues(new Uint8Array(16));
        const key = await getKey(password, salt);

        const ciphertext = await crypto.subtle.encrypt(
          { name: "AES-GCM", iv: iv },
          key,
          enc.encode(text)
        );

        // Combine salt + iv + ciphertext
        const combined = new Uint8Array([
          ...salt,
          ...iv,
          ...new Uint8Array(ciphertext),
        ]);
        return btoa(String.fromCharCode(...combined));
      }

      async function decrypt(encoded, password) {
        const combined = Uint8Array.from(atob(encoded), (c) => c.charCodeAt(0));
        const salt = combined.slice(0, 16);
        const iv = combined.slice(16, 28);
        const data = combined.slice(28);

        const key = await getKey(password, salt);

        const decrypted = await crypto.subtle.decrypt(
          { name: "AES-GCM", iv: iv },
          key,
          data
        );
        return new TextDecoder().decode(decrypted);
      }

      async function run() {
        const mode = document.getElementById("mode").value;
        const text = document.getElementById("inputText").value;
        const password = document.getElementById("password").value;
        const output = document.getElementById("output");

        try {
          if (mode === "encrypt") {
            const encrypted = await encrypt(text, password);
            output.value = encrypted;
          } else {
            const decrypted = await decrypt(text, password);
            output.value = decrypted;
          }
        } catch (e) {
          output.value = "Error - " + e.message;
        }
      }
