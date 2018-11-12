<?= "<?php\n" ?>

namespace <?= substr($generator->namespace, 0, -1) ?>;

/**
 * This is just an example.
 */
<?php
class rss extends \yii\base\Widget
{
    public function run()
    {
        return "Hello!";
    }
}
