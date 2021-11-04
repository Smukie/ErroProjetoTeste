<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="navbar">
    <h1>Secretaria Acadêmica do Ensino Superior</h1>
  </div>
  <main>
    <form class="loginForm" action="/login" method="post">
      <table>
        <tr>
          <td><label><i class="far fa-user"></i> Login</label></td>
          <td><label><i class="fas fa-key"></i> Senha</label></td>
        </tr>
        <tr>
          <td><input type="login" name="email" value="" placeholder="Insira seu e-mail" required></td>
          <td><input type="password" name="password" value="" placeholder="Insira sua senha" required></td>
        </tr>
      </table>
      <div class="esqueceuSenha">
        <i class="fas fa-unlock"></i> <a href="/recuperarsenha">Esqueceu sua senha?</a>
      </div>
      <button class="submitButton" type="submit" name="button">
        <i class="fas fa-sign-in-alt"></i> Acessar
      </button>
      <p class="alertText">E-mail inexistente ou senha inválida.</p>
    </form>
  </main>
  <script src="https://kit.fontawesome.com/50093ed56c.js" crossorigin="anonymous"></script>
