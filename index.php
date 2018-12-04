<?php
class Post
{
    public $title="";
    public $text="";
    public $pubdate="";
    private $save=false;
    private $data = array();
    public function __construct($title,$text) {
        $this->title = $title;
        $this->text = $text;
    }
public function isSave() {
    return $this->save;
}
    public function savePost() {
        $this->save=true;
    }
    public function __set($property, $value){
        if($property =="save") {
            $this->save=$value;
        }
        else {
            $this->data[$property]=$value;
        }
    }
    public function getData(){
        var_dump($this->data);
    }
}
$post1= new Post("hello world", "exaple text");
$post1->saved = true;
$post1->getData();
echo $post1->title ." is " . ($post1->isSave() ? "is saved" : "is not save");
?>