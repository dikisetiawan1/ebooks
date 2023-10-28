<?php


class Course
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function menus()
    {
        $sql = "SELECT * FROM tbl_menus";
        $result = $this->db->query($sql);
        return $result;
    }
}
