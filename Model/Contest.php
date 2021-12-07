<?php
class Contest {
    private int $contest_id;
    private int $game_id;
    private string $start_date;
    private int $winner_id;

    /**
     * Get the value of contest_id
     */ 
    public function getContest_id()
    {
        return $this->contest_id;
    }

    /**
     * Set the value of contest_id
     *
     * @return  self
     */ 
    public function setContest_id($contest_id)
    {
        $this->contest_id = $contest_id;

        return $this;
    }

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
     * Get the value of start_date
     */ 
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */ 
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of winner_id
     */ 
    public function getWinner_id()
    {
        return $this->winner_id;
    }

    /**
     * Set the value of winner_id
     *
     * @return  self
     */ 
    public function setWinner_id($winner_id)
    {
        $this->winner_id = $winner_id;

        return $this;
    }
}