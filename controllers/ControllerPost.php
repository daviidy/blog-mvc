<?php
require_once 'views/View.php';

class ControllerPost

{
  private $_articleManager;
  private $_view;

  public function __construct()
  {
    if (isset($url) && count($url) < 1) {
      throw new \Exception("Page Introuvable");
    }
    else {
      $this->article();
    }
  }

  private function article()
  {
    if (isset($_GET['id'])) {
      $this->_articleManager = new ArticleManager;
      $article = $this->_articleManager->getArticle($_GET['id']);
      $this->_view = new View('SinglePost');
      $this->_view->generate(array('article' => $article));
    }

  }
}

 ?>
