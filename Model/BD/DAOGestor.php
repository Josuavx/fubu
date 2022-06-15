<?php 
include_once 'DAOConexao.php';
include_once '../Model/Objetos/Gestor.php';




class DAOGestor extends DAOConexao
{   
    public function buscar($dados)
    {
        echo '<br>';
        print_r($dados);
        echo '<br> Buscar dados <br>';
        
        //Opcao 1 = buscando por CPF
        if ($dados->getCpf() != null)
        {
            $sql = "SELECT * FROM gestor WHERE CPF = ?";
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
            $sql = "SELECT * FROM gestor WHERE EMAIL = ?";
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
            $resultado = preencherGestor(array_values($resultado));
            
        }
            
            
        return $resultado;
        
       // $statement = $this->conn->prepare($sql);
    }
    
}

?>