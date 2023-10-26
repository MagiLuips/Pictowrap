<?php
    interface IModel {
        public function save();
        public function get($id);
        public function getAll();
        public function update();
        public function delete($id);
        public function from($array);
    }
?>