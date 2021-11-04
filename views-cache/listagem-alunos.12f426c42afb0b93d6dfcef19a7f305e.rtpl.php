<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="navbar">
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
      <input class="areaBusca" type="text" name="" placeholder="Buscar por aluno">
      <div class="cadastradosLista">
        <table>
          <thead>
            <tr>
              <th id="codigo">Código</th>
              <th id="numProcesso">Número do Processo</th>
              <th id="nome">Nome</th>
              <th id="concluido">Concluido</th>
              <th id="alterar">Alterar</th>
            </tr>
          </thead>
          <tbody>
            <?php $counter1=-1;  if( isset($alunos) && ( is_array($alunos) || $alunos instanceof Traversable ) && sizeof($alunos) ) foreach( $alunos as $key1 => $value1 ){ $counter1++; ?>
            <tr>
              <td id="codigo"><?php echo htmlspecialchars( $value1["idProcesso"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
              <td id="numProcesso"><?php if( $value1["numProcesso"] == '' ){ ?><strong>Número não cadastrado</strong><?php }else{ ?><?php echo htmlspecialchars( $value1["numProcesso"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></td>
              <td id="nome"><?php if( $value1["nome"] == '' ){ ?><strong>Nome não cadastrado</strong><?php }else{ ?><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></td>
              <td id="concluido"><?php if( $value1["concluido"] == 1 ){ ?><strong>Sim</strong><?php }else{ ?><strong>Não</strong><?php } ?></td>
              <td id="alterar">
                <!--<a href='#<?php echo htmlspecialchars( $value1["idProcesso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'-->
                <i><button type="button" name="button"><i class="far fa-edit"></button></i>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    <script src="https://kit.fontawesome.com/50093ed56c.js" crossorigin="anonymous"></script>
