<?php
class CategoriesController extends AppController {
    public $name = 'Categories';

    public function index() {
        $data = $this->Category->generateTreeList(null, null, null, '&nbsp;&nbsp;&nbsp;');
        debug($data); die;
    }
}