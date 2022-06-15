<?php 
include_once 'DAOConexao.php';
include_once '../Model/Objetos/Documento.php';




class DAODocumento extends DAOConexao{
    public function inserir($dados)
    {
        
       //Seta o comando SQL q sera usado no banco. os ? equivale a cada variavel a ser adicionada.
       $sql = "INSERT INTO documento (aluno_cpf, gestor_cpf, data, relatorio) VALUES (?, ?, ?, ?)"; //acho q tem um erro aq
       
       print_r($this->conn);
       //verifica se é possivel fazer a conexao, caso sim retorna um objeto PDO, q sera utilizado para efetuar a operacao. Caso falhe, retorna FALSE
       $statement = $this->conn->prepare($sql);
       
       //Com o objeto formado, executa o comando SQL com as variaveis dentro de um array. Caso seja um sucesso, retorna 1, caso nao, retorna 0
       $resultado = $statement->execute([$dados->getAluno_cpf(),
                            $dados->getGestor_cpf(),
                            $dados->getData(),
                            $dados->getDocumento()
                     ]);
       
       //retorna o valor de $statement. Caso a operacao seja um sucesso, retorna TRUE, caso contrario retorna FALSE
       return $resultado;
             
    }



    public function buscar($dados)
    {   
               
        if ($dados->getAluno_cpf() != null)
        {
            $sql = "SELECT * FROM documento WHERE ALUNO_CPF = ?";
            $statement = $this->conn->prepare($sql);
            $resultado = $statement->execute([$dados->getAluno_cpf()]);
            
            if($resultado == 1){
                
                $linha = $statement->rowCount();
                
                if ($linha == 0)
                {
                    $resultado = 2;
                }
                else
                {
                    for ($i = 0; $i < $linha; $i++)
                    {
                    $row = $statement->fetch(PDO::FETCH_ASSOC);
                    $res[] = $row;
                    }
                    //$resultado = $res;
                } 
            }
        }
        elseif ($dados->getGestor_cpf() != null)
        {
            $sql = "SELECT * FROM documento WHERE GESTOR_CPF = ?";
            $statement = $this->conn->prepare($sql);
            $resultado = $statement->execute([$dados->getGestor_cpf()]);
            
            if($resultado == 1){
                
                $linha = $statement->rowCount();

                if ($linha == 0)
                {
                    $resultado = 2;
                }
                else
                {
                    for ($i = 0; $i < $linha; $i++)
                    {
                    $row = $statement->fetch(PDO::FETCH_ASSOC);
                    $res[] = $row;
                    }

                    //$resultado = $res;
                } 
            }
        }    
        
        //transforma o resultado em um array numerico para depois criar o objeto Documento
       if (is_array($resultado))
        {
            $resultado = preencherDocumento(array_values($resultado));
            
        }
            
            
        return $res;
        
        
        
    }
    

}











?>