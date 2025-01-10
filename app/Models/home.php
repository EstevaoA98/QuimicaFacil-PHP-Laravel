<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = "homes";

    protected $fillable = ['title', 'subtitle', 'text_btn', 'link_btn', 'title_topics', 'description_topics', 'title_topic_one',  'description_topic_one', 'title_topic_two', 'title_topic_three', 'description_topic_,three', 'title_topic_four', 'description_topic_,four', 'title_topic_five', 'description_topic_five', 'title_topic_six', 'description_topic_,six', 'title_topic_seven', 'description_topic_seven', 'title_topic_eight', 'description_topic_eight'] ;
}
