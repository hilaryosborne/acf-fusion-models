<?php

namespace ACFFusionModel\Model;

use ACFFusionModel\Type\MediaType;

use ACFFusion\Manager;
use ACFFusion\Builder;
use ACFFusion\FieldGroup;
use ACFFusion\Field\Text;
use ACFFusion\Field\Tab;
use ACFFusion\Field\Textarea;

class Media extends MediaType {

    public static $post_defaults = [
        'post_title' => 'Attachment',
        'post_content' => '',
        'post_excerpt' => '',
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'guid' => '',
        'post_mime_type' => '',
        'post_parent' => 0
    ];

    public static $postType = 'post';

    public static function builder() {
        // Return the field groups
        return (new Builder());
    }

}