<?php

namespace saes\Model;
use \saes\DB\Sql;
use \saes\Model;

class User extends Model{

  const SESSION = "User";
  protected $fields = ["nome", "concluido", "numCI", "numProcesso", "anoGrau", "priEnvio", "idCurso", "idMotivo"];
  public static function login($email, $password)
  {
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM usuarios WHERE email = :EMAIL", array(
      ":EMAIL"=>$email
    ));
    if (count($results) === 0)
    {
      throw new \Exception("E-mail inexistente ou senha inválida.");
    }

    $data = $results[0];

    if(password_verify($password, $data["password"]) === true)
    {
      $user = new User();
      $user->setData($data);
      $_SESSION[User::SESSION] = $user->getValues();
      return $user;
    }else
    {
      throw new \Exception("E-mail inexistente ou senha inválida.");
    }
  }

  public static function verifyLogin()
    {
      if (!isset($_SESSION[User::SESSION ]) || !$_SESSION[User::SESSION] || !(int)$_SESSION[User::SESSION]["id"] > 0)
      {
        header("Location: /login");
        exit;
      }
    }

    public static function logout()
    {
      session_unset();
      session_destroy();
      //$_SESSION[User::SESSION] = NULL;
    }

    public static function listAllAlunos()
    {
      $sql = new Sql();
      return $sql->select("SELECT * FROM processos ORDER BY idProcesso;");

    }

    public static function listAllCursos()
    {
      $sql = new Sql();
      return $sql->select("SELECT * FROM cursos;");
    }

    public static function listAllMotivos()
    {
      $sql = new Sql();
      return $sql->select("SELECT * FROM motivos;");
    }
    public function saveAluno()
    {
      $sql = new Sql();
      $results = $sql->select("INSERT INTO processos(nome, concluido, numCI, numProcesso, anoGrau, priEnvio, idCurso, idMotivo) VALUES (:nome, :concluido, :numCI, :numProcesso, :anoGrau, :priEnvio, :idCurso, :idMotivo)",
      array(
        ":nome"=>$this->getnome(),
        ":concluido"=>$this->getconcluido(),
        ":numCI"=>$this->getnumCI(),
        ":numProcesso"=>$this->getnumProcesso(),
        ":anoGrau"=>$this->getanoGrau(),
        ":priEnvio"=>$this->getpriEnvio(),
        ":idCurso"=>$this->getidCurso(),
        ":idMotivo"=>$this->getidMotivo()
      ));
      //var_dump($results);
      $this->setData($results[0]);
      //var_dump($results[0]);
    }
}
