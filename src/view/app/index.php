<?php namespace src\view\app;
    $namespace_to_path = str_replace("\\", "/", __NAMESPACE__);
    $doc_root = str_replace($namespace_to_path, "", __DIR__);
    require_once($doc_root."autoload.php");
    class index{}
    use common\Constants;
?>
<div class="container-fluid">
    hello test
    <div class="row">
        <div class="<?=Constants::ASIDE_BOOTSTRAP_CLASS;?>" style="background-color:magenta; height:100vh;">
            Asideaa
        </div>
        <div class="col-10" style="background-color:cyan; height:100vh;">
            <div class="row" style="background-color:yello; height:10vh;">
                <div class="col-lg-12 col">header</div>
            </div>
            <div class="row" style="background-color:blue; height:90vh;">
                <div class="col">Content Body</div>
            </div>
        </div>
    </div>
</div>