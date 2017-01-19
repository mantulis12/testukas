<?php
Class User
{
    protected $userid;
    public function __construct($id)
    {
        $this->userid = $id;
    }
    public function getUserId()
    {
        return $this->userid;
    }
    public function setUserId($id)
    {
        $this->userid = $id;
    }
}
$user = new User(15);
echo $user->getUserId();
?>
