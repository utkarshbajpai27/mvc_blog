<?php
//namespace mvc\libraries;

class Posts
{
    private $db;
    public function __construct()
    {
            $this->db=new mvc\libraries\Database;
    }

    public function getPosts()
    {
        $this->db->query("Select * from posts");
        $result=$this->db->resultSet();
        return $result;
    }

    public function postBlog($data)
    {
        $user=$data['user'];
        $title=$data['title'];
        $image=$data['image'];
        $category=$data['category'];
        $tags=$data['tags'];
        $description=$data['description'];
        $this->db->query("insert into posts (User_ID,Blog_Title,Blog_image,Blog_category,Blog_tags,Blog_time,Blog_Description)
        values('$user','$title','$image','$category','$tags',now(),'$description')");
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
