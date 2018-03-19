<?php

class Post
{

public $id;
public $title;

	function __construct($title, $id)
	{
		$this->title = $title;
		$this->id = $id;
	}
}

class Comment {

public $content;
public $post_id;

	function __construct($content)
	{
		$this->content = $content;
		//$this->post_id = $post_id;
	}
}

$posts = new ArrayObject();
$posts->append(new post("Post 1", 1));
$posts->append(new post("Post 2", 2));

$comments = new ArrayObject();
$comments->append(new Comment("comment 1", 1));
$comments->append(new Comment("comment 2", 1));
$comments->append(new Comment("comment 3", 2));
$comments->append(new Comment("comment 4", 2));

$a = new AppendIterator();
$a->append($posts->getIterator());
$a->append($comments->getIterator());
//print_r($a->getInnerIterator());
foreach ($a as $key=>$val)
{
	if ($val instanceof post)
	echo "title = {$val->title}<br>";
	else if ($val instanceof Comment )
	echo "content = {$val->content}<br>";
}

?>

