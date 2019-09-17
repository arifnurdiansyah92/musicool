<?php

namespace RainLab\Blog\Components;

use Db;
use Carbon\Carbon;
use Cms\Classes\Page;
use RainLab\Blog\Classes\ComponentAbstract;
use RainLab\Blog\Models\Post as BlogPost;

class LatestPost extends ComponentAbstract
{
    /**
     * @var Collection A collection of categories to display
     */
    public $posts;

    /**
     * Reference to the page name for linking to posts
     *
     * @var string
     */
    public $postPage;

    public function componentDetails()
    {
        return [
            'name'        => 'Latest Post',
            'description' => 'Tampilkan Post Terbaru'
        ];
    }
    public function defineProperties()
    {
        return [
            'postUrl' => [
                'title'       => 'Link Post',
                'description' => 'Url Ke Link Blog',
                'type'        => 'string',
                'default'     => '/blog/post',
            ],
            'limit' => [
                'title' => 'Max Title',
                'description' => 'Jumlah judul yang ingin ditampilkan',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Hanya Angka!'
            ]
        ];
    }
    public function latest_posts()
    {
        $url = $this->property("postUrl","/blog/post");
        $limit = $this->property("limit",5);
        $posts = BlogPost::get()->sortByDesc("published_at")->where("published", 1)->take($limit);
        foreach($posts as $post){
            $post->url = $url."/".$post->slug;
        }
        return $posts;
    }
}
