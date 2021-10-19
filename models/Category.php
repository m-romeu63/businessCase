<?php 
    class Category extends Database {
        private $id,
                $name,
                $parentId;

        public function __construct() {
        }

        /**
         * Get the value of id
         */ 
        public function getId() {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName() {
            return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name){
            $this->name = $name;
            return $this;
        }

        /**
         * Get the value of parentId
          */ 
        public function getParentId() {
            return $this->parentId;
        }

        /**
         * Set the value of parentId
         *
         * @return  self
         */ 
        public function setParentId($parentId) {
            $this->parentId = $parentId;
            return $this;
        }

        /**
         * Method to get the category list from database
         *
         * @param Database $dbc
         * @return void
         */
        public function getCategoryList($dbc) {
            $query = 'SELECT * FROM products ORDER BY name';
            $categories = $dbc->multipleSelect($query, PDO::FETCH_CLASS, __CLASS__);
            return $categories;
        }

        /**
         * Method to get one category from the database.
         *
         * @param Database $dbc
         * @param int $id
         * @return void
         */
        public function getCategory($dbc, $id) {
            $query = 'SELECT * FROM products WHERE id = :id';
            $category = $dbc->query($query, array('id' => $id));
            return $category;
        }
    }
$aCategories = array(
    array('id'=> 1,'categoryName'=>'Chien', 'icon'=>'fluent:animal-dog-20-filled'),
    array('id'=> 2,'categoryName'=>'Chat', 'icon'=>'fluent:animal-cat-20-filled'),
    array('id'=> 3,'categoryName'=>'Rongeurs & Co', 'icon'=>'fluent:animal-rabbit-20-filled'),
    array('id'=> 4,'categoryName'=>'Oiseaux', 'icon'=>'mdi:bird'),
    array('id'=> 5,'categoryName'=>'Aquariophilie', 'icon'=>'ion:fish'),
    array('id'=> 6,'categoryName'=>'Reptiles', 'icon'=>'mdi:snake')
);
?>