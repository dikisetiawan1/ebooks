<?php


class Buku
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function bukuDigital()
    {
        $sql = "SELECT * FROM buku";
        $result = $this->db->query($sql);
        return $result;
    }
}
