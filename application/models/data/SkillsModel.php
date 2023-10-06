<?php

class SkillsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function fetch() {
        return file_get_contents(base_url("assets/data/skills.json"));
    }
}
