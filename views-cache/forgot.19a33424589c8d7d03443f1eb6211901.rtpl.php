<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="navbar">
      <h1>Secretaria Acadêmica do Ensino Superior</h1>
    </div>

    <main>
      <form class="loginForm" action="index.html" method="post">
        <table>
          <tr>
            <td><label><i class="far fa-user"></i> Email</label></td>
          </tr>
          <tr>
            <td><input type="email" name="" value="" placeholder="Insira seu email"></td>
          </tr>
        </table>
        <button class="submitButton" type="submit" name="button">
          <i class="fas fa-unlock"></i> Recuperar
        </button>
        <p class="alertText">Este email não está cadastrado</p>
      </form>
    </main>
    <script src="https://kit.fontawesome.com/50093ed56c.js" crossorigin="anonymous"></script>