<?php
include_once 'DAOConexao.php';
include_once '../Model/Objetos/Aluno.php';

class DAOAluno extends DAOConexao
{
    
    public function inserir($dados)
    {
        
        
       // $dados->
        //print_r($dados);
        print_r($dados->getNome());
        //echo ' ++++++++++'.array_values($dados).'++++++++++++++';
      //  print_r(array_values($dados));
        
       //Seta o comando SQL q sera usado no banco. os ? equivale a cada variavel a ser adicionada.
       $sql = "INSERT INTO aluno (cpf, rg, nome, nome_da_mae, genero, inst_ensino, email, senha, telefone, rua, numero, complemento, CEP, gestor_responsavel, token) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       
              
/*              .'$dados->getCpf().',
                .'$dados->getRg().',
                .'$dados->getNome()',
                .'$dados->getNomeDaMae()',
                .'$dados->getGenero()',
                .'$dados->getInstEnsino()',
                .'$dados->getEmail()',
                .'$dados->getSenha()',
                .'$dados->getTelefone()'
                */
                //)";
       print_r($this->conn);
       //verifica se é possivel fazer a conexao, caso sim retorna um objeto PDO, q sera utilizado para efetuar a operacao. Caso falhe, retorna FALSE
       $statement = $this->conn->prepare($sql);
       
       //Com o objeto formado, executa o comando SQL com as variaveis dentro de um array. Caso seja um sucesso, retorna 1, caso nao, retorna 0
       $resultado = $statement->execute([$dados->getCpf(), 
                            $dados->getRg(), 
                            $dados->getNome(),
                            $dados->getNomeDaMae(),
                            $dados->getGenero(),
                            $dados->getInstEnsino(),
                            $dados->getEmail(),
                            $dados->getSenha(),
                            $dados->getTelefone(),
                            $dados->getEnderecoRua(),
                            $dados->getEnderecoNumero(),
                            $dados->getEnderecoComplemento(),
                            $dados->getCEP(),
                            $dados->getGestor(),
                            $dados->getToken()
                    ]);
       
       
       //retorna o valor de $statement. Caso a operacao seja um sucesso, retorna TRUE, caso contrario retorna FALSE
       return $resultado;
             
    }
    
    public function deletar($dados)
    {
        $dadosCompletos = $this->buscar($dados);
        
        echo '<br> dados deletar apos chamar funcao buscar <br>';
        print_r($dadosCompletos);
        
        
        //Verifica se é um array (o resultado de busca pode ser um array ou inteiro). Caso for array, continua, caso for inteiro devolve o codigo do erro
        if (!is_object($dadosCompletos))
        {
            echo '<br> é array <br>';
            $resultado = $dadosCompletos;
        }
        else
        {
            print_r($dados);
            print_r($dadosCompletos);
            
            
            
            $this->conn->beginTransaction();
            
            $sql = "INSERT INTO alunoinativo (cpf, rg, nome, nome_da_mae, genero, inst_ensino, email, telefone, CEP, gestor_responsavel, token) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$dadosCompletos->getCpf(),
                $dadosCompletos->getRg(),
                $dadosCompletos->getNome(),
                $dadosCompletos->getNomeDaMae(),
                $dadosCompletos->getGenero(),
                $dadosCompletos->getInstEnsino(),
                $dadosCompletos->getEmail(),
                $dadosCompletos->getTelefone(),
                $dadosCompletos->getCEP(),
                $dadosCompletos->getGestor(),
                $dadosCompletos->getToken()
            ]);
            
            $sql = "DELETE FROM aluno WHERE cpf = ?";
            $statement = $this->conn->prepare($sql);
            $statement->execute([$dadosCompletos->getCpf()]);
            
            $resultado = $this->conn->commit();
            
            if ($resultado == true)
            {
                $resultado = 1;
            }
            else
            {
                $this->conn->rollBack();
                $resultado = 0;
            }
            
            
        }
        
        
        
        
        return $resultado;
    }
    
    public function buscar($dados)
    {
        echo '<br>';
        //print_r($dados);
        echo '<br> Buscar dados <br>';
        
        //Opcao 1 = buscando por CPF
        if ($dados->getCpf() != null)
        {
            $sql = "SELECT * FROM aluno WHERE CPF = ?";
            $statement = $this->conn->prepare($sql);
            $resultado = $statement->execute([$dados->getCpf()]);
            
            
            print_r($resultado);
            //Caso ocorra com sucesso a operacao
            if($resultado == 1){
                
                $linha = $statement->rowCount();
                
                echo '<br>';
                print_r($linha);
                echo '<br>';
                
                if ($linha == 0)
                {
                    
                    //retorna 2, caso nao tenha achado o usuario pelo CPF
                    $resultado = 2;
                }
                else
                {
                    //Caso tenha encontrado, como so pode haver 1, ele adiciona os dados desse usuario no retorno
                    $linha = $statement->fetch(PDO::FETCH_ASSOC);
                    $resultado = $linha;
                }
            }
            
        }
        //Opcao 2 - Buscando por Email
        elseif ($dados->getEmail() != null)
        {
            $sql = "SELECT * FROM aluno WHERE EMAIL = ?";
            $statement = $this->conn->prepare($sql);
            $resultado = $statement->execute([$dados->getEmail()]);
            
            print_r($resultado);
            //Caso ocorra com sucesso a operacao
            if($resultado == 1){
                
                $linha = $statement->rowCount();
                
                if ($linha == 0)
                {
                    //retorna 3, caso nao tenha achado o usuario pelo Email
                    $resultado = 3;
                    //return 3;
                }
                else
                {
                    //Caso tenha encontrado, como so pode haver 1, ele adiciona os dados desse usuario no retorno
                    $linha = $statement->fetch(PDO::FETCH_ASSOC);
                    $resultado = $linha;
                }
            }
            
        }
        
        print_r($resultado);
        
        
        
        //transforma o resultado em um array numerico para depois criar o objeto Aluno
        if (is_array($resultado))
        {
            $resultado = preencherAluno(array_values($resultado));
            
        }
        
        
        return $resultado;
        
        // $statement = $this->conn->prepare($sql);
    }
    
    public function totalAlunos()
    {
        $sql = "SELECT * FROM aluno";
        $statement = $this->conn->prepare($sql);
        $resultado = $statement->execute();
        
        $resultado = $statement->rowCount();
        
        return $resultado;
        
    }
    
    
    public function buscarPaginado($dados)
    {
        echo '<br>';
        //print_r($dados);
        echo '<br> Buscar dados <br>';
        
        print_r($dados);
        echo '<br>';
        
        //posicao inicial vai ser 'quantidade por paginas * (pagina atual -1)'
        $posicaoInicial = (int)$dados[0] * ((int)$dados[1] - 1);
        //quantidade buscada vai ser a quantidade por pagina
        $quantidadeBuscada = (int)$dados[0];
        
        $sql = "SELECT * FROM aluno ORDER BY cpf LIMIT ? , ?";
        $statement = $this->conn->prepare($sql);
        
        $resultado = $statement->execute([$posicaoInicial, $quantidadeBuscada]);
        
        for($i=0; $i < $statement->rowCount(); $i++)
        {
            $linha = $statement->fetch(PDO::FETCH_ASSOC);
            $resultado[] = $linha;
        }
        
        
        return $resultado;
    }
    
    
    
    public function editar($dados)
    {
        
        echo '<br>dados abaixo<br>';
        print_r($dados);
        
        
        $variaveis = [];
        
        $sql = "UPDATE aluno SET cpf=?";
        $variaveis[] = $dados->getCpf();
        
        if ($dados->getRg() != null)
        {
            $sql .= ", rg=?";
            $variaveis[] = $dados->getRg();
        }
            
        if ($dados->getNome() != null)
        {
            $sql .= ", nome=?";
            $variaveis[] = $dados->getNome();
        }
        if ($dados->getNomeDaMae() != null)
        {
            $sql .= ", nome_da_mae=?";
            $variaveis[] = $dados->getNomeDaMae();
        }
        if ($dados->getGenero() != null)
        {
            $sql .= ", genero=?";
            $variaveis[] = $dados->getGenero();
        }
            
        if ($dados->getInstEnsino() != null)
        {
            $sql .= ", inst_ensino=?";
            $variaveis[] = $dados->getInstEnsino();
        }
            
        if ($dados->getEmail() != null)
        {
            $sql .= ", email=?";
            $variaveis[] = $dados->getEmail();
        }
            
        if($dados->getSenha() != null)
        {
            $sql .= ", senha=?";
            $variaveis[] = $dados->getSenha();
        }
            
        if($dados->getTelefone() != null)
        {
            $sql .= ", telefone=?";
            $variaveis[] = $dados->getTelefone();
        }
            
        if($dados->getEnderecoRua() != null)
        {
            $sql .= ", rua=?";
            $variaveis[] = $dados->getEnderecoRua();
        }
            
        if($dados->getEnderecoNumero() != null)
        {
            $sql .= ", numero=?";
            $variaveis[] = $dados->getEnderecoNumero();
        }
           
        if($dados->getEnderecoComplemento() != null)
        {
            $sql .= ", complemento=?";
            $variaveis[] = $dados->getEnderecoComplemento();
        }
            
        if($dados->getCEP() != null)
        {
            $sql .= ", CEP=?";
            $variaveis[] = $dados->getCEP();
        }
            
        if($dados->getGestor() != null)
        {
            $sql .= ", gestor_responsavel=?";
            $variaveis[] = $dados->getGestor();
        }
            
        if($dados->getToken() != null)
        {
            $sql .= ", token=?";
            $variaveis[] = $dados->getToken();
        }
            
                                       
        
        $sql .= " WHERE cpf = ?";
        $variaveis[] = $dados->getCpf();
        
        echo '<br>sql<br>';
        print_r($sql);
        
        echo '<br>variaveis<br>';
        print_r($variaveis);
        
       
        $stmt= $this->conn->prepare($sql);
        
        $resultado = $stmt->execute($variaveis);
        
        //verifica se o comando funcionou com sucesso
        if ($resultado == 1)
        {
            //o comando pode ter funcionado com sucesso, mas caso nenhum dado for alterado, sera informado o numero 2
            if ($stmt->rowCount() == 0)
            {
                $resultado = 2;
            }
        }
        print_r($resultado);
        
        
        return $resultado;
    }
}

?>