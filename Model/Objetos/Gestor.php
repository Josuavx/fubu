<?php 

class Gestor 
    {
        private $cpf;
        private $email;
        private $senha;
        

        public function getVariaveis() {
            return get_object_vars($this);
        }

        /**
         * @return mixed
         */
        public function getCpf()
        {
            return $this->cpf;
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
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        /**
         * @return mixed
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        /**
         * @return mixed
         */
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

    }

?>