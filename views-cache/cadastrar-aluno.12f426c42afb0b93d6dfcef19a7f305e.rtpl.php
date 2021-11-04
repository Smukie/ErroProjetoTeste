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

    <div class="container">
      <form class="formCadastro" action="/app/aluno/cadastrar" method="post">
        <table>
            <tr>
              <td><label>Nome</label></td>
            </tr>
            <tr>
              <td><input type="text" name="nome" value="" placeholder="Insira o Nome"></td>
            </tr>
            <tr>
              <td>Nº CI</td>
              <td>Nº Processo</td>
            </tr>
            <tr>
              <td><input type="text" name="numCI" value="" placeholder="Insira a CI"></td>
              <td><input type="text" name="numProcesso" value="" placeholder="Insira o número do processo"></td>
            </tr>
            <tr>
              <td>1º Envio</td>
              <td>Colação de Grau</td>
            </tr>
            <tr>
              <td><input type="text" name="priEnvio" value="" placeholder="Insira a data (dd-mm-aaaa)"></td>
              <td><input type="text" name="anoGrau" value="" placeholder="Insira a colação de grau (dd-mm-aaaa)"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="concluido" value="">Concluido</td>
            </tr>
            <tr>
              <td><label>Curso</label></td>
            </tr>
            <tr>
              <td>
                <select class="" name="idCurso" style="width: 100%;">
                  <?php $counter1=-1;  if( isset($cursos) && ( is_array($cursos) || $cursos instanceof Traversable ) && sizeof($cursos) ) foreach( $cursos as $key1 => $value1 ){ $counter1++; ?>
                  <option value="<?php echo htmlspecialchars( $value1["idCurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["idCurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["sigla"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["nomeCurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td><label>Motivo</label></td>
            </tr>
            <tr>
              <td>
                <select class="" name="idMotivo">
                  <?php $counter1=-1;  if( isset($motivos) && ( is_array($motivos) || $motivos instanceof Traversable ) && sizeof($motivos) ) foreach( $motivos as $key1 => $value1 ){ $counter1++; ?>
                  <option value="<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo htmlspecialchars( $value1["motivo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" name="" value="Enviar">
              </td>
            </tr>
        </table>
      </form>
    </div>


    <script src="https://kit.fontawesome.com/50093ed56c.js" crossorigin="anonymous"></script>
