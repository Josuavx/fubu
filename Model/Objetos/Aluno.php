<?php 
    class Aluno 
    {
        private $cpf;
        private $rg;
        private $nome;
        private $nomeDaMae;
        private $genero;
        private $instEnsino;
        private $email;
        private $senha;
        private $telefone;
        private $CEP;
        private $enderecoRua;
        private $enderecoNumero;
        private $enderecoComplemento;
        private $token;
        private $gestor;
            
        
        /*
        public function __construct($cpf, $rg, $nome, $nomeDaMae, $genero, $instEnsino, $email, $senha, $telefone, $CEP, $enderecoRua, $enderecoNumero, $enderecoComplemento, $token, $gestor)
        {
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->nome = $nome;
            $this->nomeDaMae = $nomeDaMae;
            $this->genero = $genero;
            $this->instEnsino = $instEnsino;
            $this->email = $email;
            $this->senha = $senha;
            $this->telefone = $telefone;
            $this->CEP = $CEP;
            $this->enderecoRua = $enderecoRua;
            $this->enderecoNumero = $enderecoNumero;
            $this->enderecoComplemento = $enderecoComplemento;
            $this->token = $token;
            $this->gestor = $gestor;
        }
        */
        
        /*
        public function __serialize(): array
        {
            return [
                'cpf' => $this->cpf,
                'rg' => $this->rg,
                'nome' => $this->nome,
                'nomeDaMae' => $this->nomeDaMae,
                'genero' => $this->genero,
                'instEnsino' => $this->instEnsino,
                'email' => $this->email,
                'senha' => $this->senha,
                'telefone' => $this->telefone,
                'CEP' => $this->CEP,
                'enderecoRua' => $this->enderecoRua,
                'enderecoNumero' => $this->enderecoNumero,
                'enderecoComplemento' => $this->enderecoComplemento,
                'token' => $this->token,
                'gestor' => $this->gestor,
            ];
        }
        */
        
        public function getVariaveis() {
            return get_object_vars($this);
        }
        
        /**
         * @return mixed
         */
        public function getEnderecoRua()
        {
            return $this->enderecoRua;
        }
    
        /**
         * @return mixed
         */
        public function getToken()
        {
            return $this->token;
        }
    
        /**
         * @return mixed
         */
        public function getGestor()
        {
            return $this->gestor;
        }
    
        /**
         * @param mixed $enderecoRua
         */
        public function setEnderecoRua($enderecoRua)
        {
            $this->enderecoRua = $enderecoRua;
        }
    
        /**
         * @param mixed $token
         */
        public function setToken($token)
        {
            $this->token = $token;
        }
    
        /**
         * @param mixed $gestor
         */
        public function setGestor($gestor)
        {
            $this->gestor = $gestor;
        }
    
        /**
         * @return mixed
         */
        
        
        /**
         * @return mixed
         */
        public function getTelefone()
        {
            return $this->telefone;
        }
    
        /**
         * @param mixed $telefone
         */
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
    
        public function getCpf()
        {
            return $this->cpf;
        }
    
        /**
         * @return mixed
         */
        public function getRg()
        {
            return $this->rg;
        }
    
        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }
    
        /**
         * @return mixed
         */
        public function getNomeDaMae()
        {
            return $this->nomeDaMae;
        }
    
        /**
         * @return mixed
         */
        public function getGenero()
        {
            return $this->genero;
        }
    
        /**
         * @return mixed
         */
        public function getInstEnsino()
        {
            return $this->instEnsino;
        }
    
        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }
    
        /**
         * @return mixed
         */
        public function getSenha()
        {
            return $this->senha;
        }
    
        /**
         * @return mixed
         */
        public function getCEP()
        {
            return $this->CEP;
        }
    
        /**
         * @return mixed
         */
        public function getEnderecoNumero()
        {
            return $this->enderecoNumero;
        }
    
        /**
         * @return mixed
         */
        public function getEnderecoComplemento()
        {
            return $this->enderecoComplemento;
        }
    
        /**
         * @param mixed $cpf
         */
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
    
        /**
         * @param mixed $rg
         */
        public function setRg($rg)
        {
            $this->rg = $rg;
        }
    
        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
    
        /**
         * @param mixed $nomeDaMae
         */
        public function setNomeDaMae($nomeDaMae)
        {
            $this->nomeDaMae = $nomeDaMae;
        }
    
        /**
         * @param mixed $genero
         */
        public function setGenero($genero)
        {
            $this->genero = $genero;
        }
    
        /**
         * @param mixed $inst_ensino
         */
        public function setInstEnsino($instEnsino)
        {
            $this->instEnsino = $instEnsino;
        }
    
        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }
    
        /**
         * @param mixed $senha
         */
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
    
        /**
         * @param mixed $CEP
         */
        public function setCEP($CEP)
        {
            $this->CEP = $CEP;
        }
    
        /**
         * @param mixed $enderecoNumero
         */
        public function setEnderecoNumero($enderecoNumero)
        {
            $this->enderecoNumero = $enderecoNumero;
        }
    
        /**
         * @param mixed $enderecoComplement
         */
        public function setEnderecoComplemento($enderecoComplement)
        {
            $this->enderecoComplemento = $enderecoComplement;
        }
    
        
    
    
    
    }
?>