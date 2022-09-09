<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
</head>
<body>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyC8fjYtSIbfripxCfxYxG5uST7gw8LGGiE",
    authDomain: "proyecto-470ab.firebaseapp.com",
    projectId: "proyecto-470ab",
    storageBucket: "proyecto-470ab.appspot.com",
    messagingSenderId: "171571473049",
    appId: "1:171571473049:web:1381c9b2871f5024fde608",
    measurementId: "G-NJHMW4WPES"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

</body>
</html>

<form action="validarsesion.php" method="POST" id="frm_sesion">
        <label>Usuario</label>
        <input type="text" placeholder="Ingrese Usuario" name="usuario">
        <label>Contraseña</label>
        <input type="text" placeholder="Ingrese Contraseña" name="contrasena">
        <input type="submit" value="Iniciar sesion">
       
</form>



 