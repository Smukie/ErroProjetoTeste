<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="navbar">
      <h1>Secretaria Acadêmica do Ensino Superior</h1>
      <div class="menu">
        <ul>
          <li>
            <p><i class="far fa-plus-square"></i> Cadastrar</p>
            <ul class="submenu">
              <li><a href='/app/aluno/cadastrar'>Alunos</a></li>
              <li><a href='/app/curso/cadastrar'>Cursos</a></li>
              <li><a href='/app/motivo/cadastrar'>Motivos</a></li>
            </ul>
          </li>
          <li><a href='/app/aluno/listagem'><i class="far fa-address-card"></i> Listagem</a></li>
          <li><a href='/app/logout'><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
      </div>
    </div>

    <main>
      <form class="loginForm" action="#" method="post">
        <table>
          <tr>
            <td><label><i class="fas fa-university"></i> Curso</label></td>
          </tr>
          <tr>
            <td><input type="text" name="" value="" placeholder="Insira o nome do curso"></td>
          </tr>
        </table>
        <button class="submitButton" type="submit" name="button">
          <i class="fas fa-plus"></i> Adicionar
        </button>
        <p class="alertText">Este curso já existe</p>
      </form>
    </main>
    <script src="https://kit.fontawesome.com/50093ed56c.js" crossorigin="anonymous"></script>
