<?php
class Game {
    private int $game_id;
    private string $title;
    private string $min_players;
    private $max_players;

    /**
     * Get the value of game_id
     */ 
    public function getGame_id()
    {
        return $this->game_id;
    }

    /**
     * Set the value of game_id
     *
     * @return  self
     */ 
    public function setGame_id($game_id)
    {
        $this->game_id = $game_id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of min_players
     */ 
    public function getMin_players()
    {
        return $this->min_players;
    }

    /**
     * Set the value of min_players
     *
     * @return  self
     */ 
    public function setMin_players($min_players)
    {
        $this->min_players = $min_players;

        return $this;
    }

    /**
     * Get the value of max_players
     */ 
    public function getMax_players()
    {
        return $this->max_players;
    }

    /**
     * Set the value of max_players
     *
     * @return  self
     */ 
    public function setMax_players($max_players)
    {
        $this->max_players = $max_players;

        return $this;
    }
}