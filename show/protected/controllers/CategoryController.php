<?php 
class CategoryController extends Controller{
	public function actionIndex() {
		$category = new Category();
		$result = $category->getPid(1);
		$username = $result['username'];
		$this->render("index",array("username"=>$username));
	}

	public function actionShow() {
		$title = "hello";
		$this->render("show",array("title"=>$title));
	}
}