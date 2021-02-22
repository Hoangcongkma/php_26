<?php 
require_once 'models/Category.php';
require_once 'models/Post.php';
require_once 'models/User.php';
require_once 'controllers/client/ClientController.php';

/**
 * 
 */
class HomeClientController extends ClientController
{
	
    var $cate_obj;
    var $post_obj;
    var $user_obj;

    function __construct(){
        $this->cate_obj = new Category();
        $this->post_obj = new Post();
        $this->user_obj = new User();
    }
    public function index()
    {
        $news = $this->post_obj->getNew($limit=8);
        $views = $this->post_obj->mostView($limit=4);
        $recipes = $this->post_obj->newRecipes();
        $this->view('client/layout/master.php',[
            'page'=>'home', 
            'new' => $news, 
            "view" => $views, 
            'reci' => $recipes
        ]);
    }

    public function search($data){
        $key=$_POST['key'];
        $post = $this->post_obj->searchName($key);
        $this->view('client/layout/master.php',[
            'page'=>'search', 
            'posts' => $post,
            'kw'=>$key
        ]);
    }

    public function category($slug)
    {
        $model = new Category();
        $category = $model->first(['slug'=>$slug]);//Lấy ra categroy tương ứng vs slug

        $model = new Post();
        $posts = $model->findWhere(['category_id'=>$category['id']]);//Lấy ra các bài post thuộc category vừa tìm được

        $this->view('client/layouts/master.php',[
            'page'  =>'category',
            'posts' => $posts
        ]);
    }

}




?>