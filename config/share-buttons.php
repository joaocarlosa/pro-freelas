<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Representation
    |--------------------------------------------------------------------------
    |
    | These values specify representations of different parts of share buttons.
    |
    | Block representation:
    | - 'block_prefix' represents a share buttons block start
    | - 'block_suffix' represents a share buttons block end
    | Element representation:
    | - 'element_prefix' represents an element start
    | - 'element_suffix' represents an element end
    |
    */

    'block_prefix' => '<div id="social-links"><ul>',
    'block_suffix' => '</ul></div>',
    'element_prefix' => '<li>',
    'element_suffix' => '</li>',

    /*
    |--------------------------------------------------------------------------
    | Share buttons
    |--------------------------------------------------------------------------
    |
    | These values specify some configuration settings for the social share buttons.
    | These settings include a share button url, a Gostaria de compartilhar esse projeto, some extras.
    | The format of substitution depends on a templater (see Templaters section).
    |
    */

    'buttons' => [
        'copylink' => [
            'url' => ':url',
            'extra' => [
                'raw' => 'true',
                'hash' => 'true',
            ],
        ],
        'evernote' => [
            'url' => 'https://www.evernote.com/clip.action?url=:url&t=:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'facebook' => [
            'url' => 'https://www.facebook.com/sharer/sharer.php?u=:url&quote=:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'hackernews' => [
            'url' => 'https://news.ycombinator.com/submitlink?t=:text&u=:url',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'linkedin' => [
            'url' => 'https://www.linkedin.com/sharing/share-offsite?mini=true&url=:url&title=:text&summary=:summary',
            'text' => 'Gostaria de compartilhar esse projeto',
            'extra' => [
                'summary' => '',
            ],
        ],
        'mailto' => [
            'url' => 'mailto:?subject=:text&body=:url',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'pinterest' => [
            'url' => 'https://pinterest.com/pin/create/button/?url=:url',
        ],
        'pocket' => [
            'url' => 'https://getpocket.com/edit?url=:url&title=:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'reddit' => [
            'url' => 'https://www.reddit.com/submit?title=:text&url=:url',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'skype' => [
            'url' => 'https://web.skype.com/share?url=:url&text=:text&source=button',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'telegram' => [
            'url' => 'https://telegram.me/share/url?url=:url&text=:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'twitter' => [
            'url' => 'https://twitter.com/intent/tweet?text=:text&url=:url',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'vkontakte' => [
            'url' => 'https://vk.com/share.php?url=:url&title=:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'whatsapp' => [
            'url' => 'https://wa.me/?text=:url%20:text',
            'text' => 'Gostaria de compartilhar esse projeto',
        ],
        'xing' => [
            'url' => 'https://www.xing.com/spi/shares/new?url=:url',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | These values specify templates for the elements of the social share buttons.
    | The format of substitution depends on a templater (see Templaters section).
    | Note: Don't remove the social-button class from links because it's used in js.
    |
    */

    'templates' => [
        'copylink' => '<a href=":url" class="social-button:class" id="clip":title:rel><span class="fas fa-share"></span></a>',
        'evernote' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-evernote"></span></a>',
        'facebook' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-facebook-square"></span></a>',
        'hackernews' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-hacker-news"></span></a>',
        'linkedin' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-linkedin"></span></a>',
        'mailto' => '<a href=":url" class="social-button:class":id:title:rel><span class="fas fa-envelope"></span></a>',
        'pinterest' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-pinterest"></span></a>',
        'pocket' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-get-pocket"></span></a>',
        'reddit' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-reddit"></span></a>',
        'skype' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-skype"></span></a>',
        'telegram' => '<a href=":url" class="social-button:class":id:title:rel target="_blank"><span class="fab fa-telegram"></span></a>',
        'twitter' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-twitter"></span></a>',
        'vkontakte' => '<a href=":url" class="social-button:class":id:title:rel><span class="fab fa-vk"></span></a>',
        'whatsapp' => '<a href=":url" class="social-button:class":id:title:rel target="_blank"><span class="fab fa-whatsapp"></span></a>',
        'xing' => '<a href=":url" class="social-button:class":id:title:rel target="_blank"><span class="fab fa-xing"></span></a>',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templaters
    |--------------------------------------------------------------------------
    |
    | This package uses a simple template engine to substitute values in different
    | configuration settings and templates. If you want to change the substitution
    | format, feel free to use your favorite template engine (in this case you
    | should add an adapter that must conform to the Templater interface).
    |
    */

    'templater' => \Kudashevs\ShareButtons\Templaters\LaravelTemplater::class,

];