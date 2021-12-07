<?php
class Player {
    private int $player_id;
    private string $email;
    private string $nickname;

    /**
     * Get the value of player_id
     */ 
    public function getPlayer_id()
    {
        return $this->player_id;
    }

    /**
     * Set the value of player_id
     *
     * @return  self
     */ 
    public function setPlayer_id($player_id)
    {
        $this->player_id = $player_id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nickname
     */ 
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }
}