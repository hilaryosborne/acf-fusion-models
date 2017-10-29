<?php

namespace ACFFusionModel\Model;

use ACFFusionModel\Type\PostType;

use ACFFusion\Manager;
use ACFFusion\Builder;
use ACFFusion\FieldGroup;
use ACFFusion\Field\Text;
use ACFFusion\Field\Tab;
use ACFFusion\Field\Textarea;

class Post extends PostType {

    public static $post_defaults = [
        'post_title' => 'Post',
        'post_content' => 'Post Details',
        'post_excerpt' => 'Post Details',
        'post_type' => 'post',
        'post_status' => 'publish'
    ];

    public static $postType = 'post';

    public static function builder() {
        // Return the field groups
        return (new Builder())
            ->addFieldGroup((new FieldGroup('post_settings', 'POST SETTINGS'))
                ->setPosition('acf_after_title')
                ->addLocation('post_type', static::$postType)
                ->addField(new Tab('meta','META'))
                ->addField((new Text('meta_title', 'Meta Title')))
                ->addField((new Textarea('meta_description', 'Meta Description'))->setWrapper(50))
                ->addField((new Textarea('meta_keywords', 'Meta Keywords'))
                    ->setWrapper(50)
                )
            );
    }

}