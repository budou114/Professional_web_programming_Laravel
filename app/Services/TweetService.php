<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
  public function getTweets()
  {
    return $tweets = Tweet::all();
  }
}