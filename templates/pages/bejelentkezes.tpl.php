    <div id="loginform">
    <form action = "?oldal=belepes" method = "post">
      <fieldset>
        <legend>Bejelentkezés - Hibajegy kezelő rendszerbe</legend>
        <br>
        <input type="text" name="username" placeholder="Felhasználónév" required><br><br>
        <input type="password" name="password" placeholder="Jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Amennyiben nem rendelkezik felhasználóval a bejelentkezéshez regisztrálnia kell magát!</h2>
    <form action = "?oldal=regisztracio" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="lastname" id="lastname" placeholder="Vezetéknév" required><br><br>
        <input type="text" name="firstname" id="firstname" placeholder="Utónév" required><br><br>
        <input type="text" name="username" id="username" placeholder="Felhasználónév" required><br><br>
        <input type="password" name="password" placeholder="Jelszó" required><br><br>
        <input type="submit" name="register" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
  </div>
