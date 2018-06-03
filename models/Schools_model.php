<?php
/**
 * Created by PhpStorm.
 * User: menouer
 * Date: 31/05/2018
 * Time: 13:53
 */
    class Schools_model extends CI_Model{

        protected $tableSchool = 'school';
        protected $schoolId = 'school_id';
        protected $schoolName = 'school_name';
        protected $schoolCity = 'school_city';
        protected $schoolStreet = 'school_street';

        /**
         * Schools_model constructor.
         */
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        /**
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
            return parent::__get($key); // TODO: Change the autogenerated stub
        }

        /**
         * @return string
         */
        public function getTableSchool()
        {
            return $this->tableSchool;
        }

        /**
         * @return string
         */
        public function getSchoolId()
        {
            return $this->schoolId;
        }
        /**
         * @return string
         */
        public function getSchoolName()
        {
            return $this->schoolName;
        }
        /**
         * @return string
         */
        public function getSchoolCity()
        {
            return $this->schoolCity;
        }
        /**
         * @return string
         */
        public function getSchoolStreet()
        {
            return $this->schoolStreet;
        }

        public function getListSchools()
        {
            $this->load->database();
            return $this->db
                ->select($this->getSchoolName(),$this->getSchoolCity(),$this->getSchoolStreet())
                ->from($this->getTableSchool())
                ->orderby($this->getSchoolName());
        }

        public function addSchool($id,$name,$city,$street)
        {
            $this->load->database();
            $data = array(
                $this->getSchoolId() => $id,
                $this->getSchoolName() => $name,
                $this->getSchoolCity() => $city,
                $this->getSchoolStreet() => $street
            );
            return $this->db
                ->insert($this->getTableSchool(),$data);
        }

        public function updateSchool($id,$name,$city,$street)
        {
            $this->load->database();
            $data = array(
                $this->getSchoolId() => $id,
                $this->getSchoolName() => $name,
                $this->getSchoolCity() => $city,
                $this->getSchoolStreet() => $street
            );
            return $this->db
                ->replace($this->getTableSchool(),$data);
        }

        public function deleteDancer($id)
        {
            $this->load->database();
            $data = array($this->getSchoolId() =>$id);
            return $this->db
                ->delete($this->getTableSchool(),$data);
        }
    }