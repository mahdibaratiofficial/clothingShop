<?php

namespace Core\application;
class session
{
    protected $session_name;

    /*
     * create session function
     * @param string
     * @return array
     * @author me
     * */
    public function create_login_session($user_id)
    {

        $this->session_name = [
            "id" => $user_id,
            "create_at" => time(),
            "expire" => ""
        ];
    }
}


?>