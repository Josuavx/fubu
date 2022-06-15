<?php 

    class Documento
    {
        private $documento;
        private $aluno_cpf;
        private $gestor_cpf;
        private $data;


        public function getData()
        {
            return $this->data;
        }

        public function setData($data)
        {
            $this->data = $data;
        }
        
        public function getDocumento()
        {
            return $this->documento;
        }

        public function setDocumento($documento)
        {
            $this->documento = $documento;
        }

        public function getAluno_cpf()
        {
            return $this->aluno_cpf;
        }

        public function setAluno_cpf($aluno_cpf)
        {
            $this->aluno_cpf = $aluno_cpf;
        }

        public function getGestor_cpf()
        {
            return $this->gestor_cpf;
        }

        public function setGestor_cpf($gestor_cpf)
        {
            $this->gestor_cpf = $gestor_cpf;
        }

    }








?>