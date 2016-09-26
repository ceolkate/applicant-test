<?php
class Status{
	  public $id;
    public $name;

    public function __construct($id, $name) {
      $this->id = $id;
      $this->name  = $name;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      // $ids = [1,2,3,4];
      // $names = ['USA','Canada','India','WI'];
      // for($i = 0; $i < 4; $i++){
      //   $list[$i] = new Country($ids[$i],$names[$i]);
      // }
      $req = $db->query('SELECT * FROM Status');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new State($post['StatusID'], $post['StatusName']);
      }
      return $list;
    }

     public static function getStatusByID($id) {
      $list;
      $db = Db::getInstance();
      
      $req = $db->query("SELECT * FROM Status where StatusID = '$id' ");

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list = new Status($post['StatusID'], $post['StatusName']);
      }
      return $list;
    }
}
?>