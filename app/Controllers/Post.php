<?php

namespace App\Controllers;

class Post extends BaseController
{

function __construct(){
    $this->PostModel        = new \App\Models\PostModel;
    $this->CategoryModel    = new \App\Models\CategoryModel;
}

function index(){
    $post_category_id = null;
    $category_is_published = 1;
    $post_is_published = 1;
    $pagination = 1;  // this is just to tell the model to return $this instead of the results.
    $this->data['posts']    = $this->PostModel->getPostsByCategory($post_category_id,
                              $category_is_published, $post_is_published, $pagination )->paginate(3);
    $this->data['pager']    = $this->PostModel->pager;
    return view('Post/post_index', $this->data);
}

}
