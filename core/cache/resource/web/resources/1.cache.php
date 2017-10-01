<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1479833271,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image' => 
    array (
      0 => 'image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!doctype html>
<head>
    <title>Главная - MODX Revolution</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet"
    <base href="http://shopkeeper/" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Каталог</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">[[!Shopkeeper3@params]]</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        <div class="row">
            [[!getPage?
                &elementClass=`modSnippet`
                &element=`getProducts`
            	&parents=`2`
            	&includeTVs=`1`
            	&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`
            	&limit=`3`
            	&tpl=`product`
            ]]
            <div class="col-lg-12"><ul class="pagination">[[+page.nav]]</ul></div>
        </div>
        
        <!--
        <div class="row">
            [[!getProducts?
            	&parents=`2`
            	&includeTVs=`1`
            	&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`
            	&limit=`10`
            	&tpl=`product`
            	&where=`template:2`
            ]]
        </div>
        -->
    </div>
</body>
</html>',
    '_isForward' => true,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Главная',
    '[[$menu]]' => '<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Каталог</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">[[!Shopkeeper3@params]]</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>',
    '[[~3? &scheme=`abs`]]' => '/index.php?id=3',
    '[[*id]]' => 1,
    '[[~1? &scheme=`abs`]]' => '/index.php?id=1',
    '[[~4? &scheme=`abs`]]' => '/index.php?id=4',
    '[[~5? &scheme=`abs`]]' => '/index.php?id=5',
    '[[$?namespace=``&limit=`3`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getProducts`&parents=`2`&includeTVs=`1`&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`&tpl=`product`&total=`5`&pageOneLimit=`3`&actualLimit=`3`&toPlaceholder=``&qs=`6856663bbb70143aabf9ed39e36415c1`&pageCount=`2`&href=`index.php?id=1`&pageNo=`1`]]' => '<li[[+activeClasses]]><a class="active"[[+title]] href="index.php?id=1">1</a></li>',
    '[[$?namespace=``&limit=`3`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getProducts`&parents=`2`&includeTVs=`1`&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`&tpl=`product`&total=`5`&pageOneLimit=`3`&actualLimit=`3`&toPlaceholder=``&qs=`cbfe0012da6ce80977f0f6296c675d77`&pageCount=`2`&href=`index.php?id=1&amp;page=2`&pageNo=`2`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">2</a></li>',
    '[[$?namespace=``&limit=`3`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getProducts`&parents=`2`&includeTVs=`1`&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`&tpl=`product`&total=`5`&pageOneLimit=`3`&actualLimit=`3`&toPlaceholder=``&qs=`42dbd73838a6ba0376e8109e381e844e`&pageCount=`2`&href=`index.php?id=1&amp;page=2`&pageNo=`2`]]' => '<li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">&gt;&gt;</a></li>',
    '[[$?namespace=``&limit=`3`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getProducts`&parents=`2`&includeTVs=`1`&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`&tpl=`product`&total=`5`&pageOneLimit=`3`&actualLimit=`3`&toPlaceholder=``&qs=`e249da7a7b6a7949358d710079533372`&pageCount=`2`&href=`index.php?id=1&amp;page=2`&pageNo=`2`]]' => '<li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">Last</a></li>',
    '[[$?namespace=``&limit=`3`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+first]][[+prev]][[+pages]][[+next]][[+last]]`&pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getProducts`&parents=`2`&includeTVs=`1`&includeTVList=`image,article,diam,width,manufacturer,season,thorms,price`&tpl=`product`&total=`5`&pageOneLimit=`3`&actualLimit=`3`&toPlaceholder=``&qs=`ebbecd3d4a48d4109062d06ea816e2b6`&pageCount=`2`&pages=`<li[[+activeClasses]]><a class="active"[[+title]] href="index.php?id=1">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">2</a></li>`&next=`<li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">&gt;&gt;</a></li>`&last=`<li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">Last</a></li>`]]' => '[[+first]][[+prev]]<li[[+activeClasses]]><a class="active"[[+title]] href="index.php?id=1">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">2</a></li><li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">&gt;&gt;</a></li><li class="control"><a[[+classes]][[+title]] href="index.php?id=1&amp;page=2">Last</a></li>',
    '[[~6? &scheme=`abs`]]' => '/index.php?id=6',
    '[[~7? &scheme=`abs`]]' => '/index.php?id=7',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'menu' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Каталог</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">[[!Shopkeeper3@params]]</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Каталог</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">[[!Shopkeeper3@params]]</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Shopkeeper3' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Shopkeeper3',
          'description' => 'Shopping cart',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'lang' => 
            array (
              'name' => 'lang',
              'desc' => 'prop_shk.lang',
              'type' => 'textfield',
              'options' => '',
              'value' => 'ru',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Язык',
              'area_trans' => '',
            ),
            'prodCont' => 
            array (
              'name' => 'prodCont',
              'desc' => 'prop_shk.prodcont',
              'type' => 'textfield',
              'options' => '',
              'value' => 'div.shk-item',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'CSS-селектор элемента, внутри которого находится информация о товаре',
              'area_trans' => '',
            ),
            'tplPath' => 
            array (
              'name' => 'tplPath',
              'desc' => 'prop_shk.tplpath',
              'type' => 'textfield',
              'options' => '',
              'value' => 'core/components/shopkeeper3/elements/chunks/ru/',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Путь до папки с чанками сниппета',
              'area_trans' => '',
            ),
            'cartTpl' => 
            array (
              'name' => 'cartTpl',
              'desc' => 'prop_shk.carttpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCart.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон корзины',
              'area_trans' => '',
            ),
            'cartRowTpl' => 
            array (
              'name' => 'cartRowTpl',
              'desc' => 'prop_shk.cartrowtpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE shopCartRow.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон строки корзины',
              'area_trans' => '',
            ),
            'orderDataTpl' => 
            array (
              'name' => 'orderDataTpl',
              'desc' => 'prop_shk.orderdatatpl',
              'type' => 'textfield',
              'options' => '',
              'value' => '@FILE orderData.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон для содержимого заказа',
              'area_trans' => '',
            ),
            'flyToCart' => 
            array (
              'name' => 'flyToCart',
              'desc' => 'prop_shk.flytocart',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'helper',
                  'value' => 'helper',
                  'name' => 'helper',
                ),
                1 => 
                array (
                  'text' => 'image',
                  'value' => 'image',
                  'name' => 'image',
                ),
                2 => 
                array (
                  'text' => 'scrollimage',
                  'value' => 'scrollimage',
                  'name' => 'scrollimage',
                ),
                3 => 
                array (
                  'text' => 'nofly',
                  'value' => 'nofly',
                  'name' => 'nofly',
                ),
              ),
              'value' => 'helper',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Эффект добавления товара в корзину',
              'area_trans' => '',
            ),
            'fieldPrice' => 
            array (
              'name' => 'fieldPrice',
              'desc' => 'prop_shk.pricetv',
              'type' => 'textfield',
              'options' => '',
              'value' => 'price',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя TV параметра цены',
              'area_trans' => '',
            ),
            'style' => 
            array (
              'name' => 'style',
              'desc' => 'prop_shk.style',
              'type' => 'textfield',
              'options' => '',
              'value' => 'default',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Стиль корзины',
              'area_trans' => '',
            ),
            'currency' => 
            array (
              'name' => 'currency',
              'desc' => 'prop_shk.currency',
              'type' => 'textfield',
              'options' => '',
              'value' => 'руб.',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Валюта по умолчанию',
              'area_trans' => '',
            ),
            'noCounter' => 
            array (
              'name' => 'noCounter',
              'desc' => 'prop_shk.nocounter',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать стрелки изменения кол-ва товара',
              'area_trans' => '',
            ),
            'noLoader' => 
            array (
              'name' => 'noLoader',
              'desc' => 'prop_shk.noloader',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать прелоадер',
              'area_trans' => '',
            ),
            'orderFormPageId' => 
            array (
              'name' => 'orderFormPageId',
              'desc' => 'prop_shk.orderformpage',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID страницы с формой оформления заказа',
              'area_trans' => '',
            ),
            'goToOrderFormPage' => 
            array (
              'name' => 'goToOrderFormPage',
              'desc' => 'prop_shk.gotoorderformpage',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Переходить на страницу оформления заказа сразу после добавлении товара в корзину',
              'area_trans' => '',
            ),
            'counterField' => 
            array (
              'name' => 'counterField',
              'desc' => 'prop_shk.counterfield',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара стрелки больше/меньше',
              'area_trans' => '',
            ),
            'counterFieldCart' => 
            array (
              'name' => 'counterFieldCart',
              'desc' => 'prop_shk.counterFieldCart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара в корзине стрелки больше/меньше',
              'area_trans' => '',
            ),
            'excepDigitGroup' => 
            array (
              'name' => 'excepDigitGroup',
              'desc' => 'prop_shk.excepdigitgroup',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разделять числа цен в корзине на разряды',
              'area_trans' => '',
            ),
            'changePrice' => 
            array (
              'name' => 'changePrice',
              'desc' => 'prop_shk.changeprice',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'yes',
                  'value' => '1',
                  'name' => 'yes',
                ),
                1 => 
                array (
                  'text' => 'no',
                  'value' => '0',
                  'name' => 'no',
                ),
                2 => 
                array (
                  'text' => 'replace',
                  'value' => 'replace',
                  'name' => 'replace',
                ),
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'При изменении параметров с ценой - изменяется цена товара, а индекс с плюсом не появляется',
              'area_trans' => '',
            ),
            'animCart' => 
            array (
              'name' => 'animCart',
              'desc' => 'prop_shk.animcart',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Анимация изменения высоты корзины',
              'area_trans' => '',
            ),
            'allowFloatCount' => 
            array (
              'name' => 'allowFloatCount',
              'desc' => 'prop_shk.allowfloatcount',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разрешить покупать дробное число товара',
              'area_trans' => '',
            ),
            'jsScript' => 
            array (
              'name' => 'jsScript',
              'desc' => 'prop_shk.nojavascript',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Работать без JavaScript',
              'area_trans' => '',
            ),
            'noJQuery' => 
            array (
              'name' => 'noJQuery',
              'desc' => 'prop_shk.nojquery',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не подгружать jquery.js',
              'area_trans' => '',
            ),
            'noConflict' => 
            array (
              'name' => 'noConflict',
              'desc' => 'prop_shk.noconflict',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим noConflict для jQuery. Используется, если на сайте уже используется другая JS-библиотека (не jQuery)',
              'area_trans' => '',
            ),
            'hideOn' => 
            array (
              'name' => 'hideOn',
              'desc' => 'prop_shk.hideon',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не выводить корзину на страницах (id через запятую)',
              'area_trans' => '',
            ),
            'TVsaveList' => 
            array (
              'name' => 'TVsaveList',
              'desc' => 'prop_shk.TVsaveList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список имён TV-параметров, которые нужно сохранить в БД при отправке заказа. Если пусто, сохраняются все TV.',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'prop_shk.fromParentList',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список полей через запятую, которые нужно добавить товарам от родителей',
              'area_trans' => '',
            ),
            'fromParentHeight' => 
            array (
              'name' => 'fromParentHeight',
              'desc' => 'prop_shk.fromParentHeight',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Сколько уровней родителей учитывать при использовании параметра fromParentList',
              'area_trans' => '',
            ),
            'additParamSource' => 
            array (
              'name' => 'additParamSource',
              'desc' => 'prop_shk.additParamSource',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID источника доп.параметров (ресурс MODX)',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'prop_shk.className',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modResource',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'prop_shk.packageName',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя пакета класса товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'savePurchasesFields' => 
            array (
              'name' => 'savePurchasesFields',
              'desc' => 'prop_shk.savePurchasesFields',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список названий полей товаров, которые нужно сохранять при заказе',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_shk.debug',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим отладки',
              'area_trans' => '',
            ),
            'processParams' => 
            array (
              'name' => 'processParams',
              'desc' => 'prop_shk.processParams',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Просчитывать дополнительные параметры перед добавлением товара в корзину',
              'area_trans' => '',
            ),
            'pluralWords' => 
            array (
              'name' => 'pluralWords',
              'desc' => 'prop_shk.pluralWords',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Слова для склонения в зависимости от количества товара в корзине',
              'area_trans' => '',
            ),
            'groupBy' => 
            array (
              'name' => 'groupBy',
              'desc' => 'prop_shk.groupBy',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя поля для группировки товаров в корзине',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-1.11.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).bind( \'ready\', function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getPage' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getPage',
          'description' => '<b>1.2.4-pl</b> A generic wrapper snippet for returning paged results and navigation from snippets that return limitable collections.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'The key of a property that indicates the current page.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'The maximum number of pages to display when rendering paging controls',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'The class of element that will be called by the getPage snippet instance.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'Content representing a single page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageNavOuterTpl' => 
            array (
              'name' => 'pageNavOuterTpl',
              'desc' => 'Content representing the layout of the page navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the layout of the page navigation controls.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'Content representing the current page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'Content representing the first page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'Content representing the last page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'Content representing the previous page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'Content representing the next page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'If true, unique page requests will be cached according to addition cache properties.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, unique page requests will be cached according to addition cache properties.',
              'area_trans' => '',
            ),
            'cache_key' => 
            array (
              'name' => 'cache_key',
              'desc' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'area_trans' => '',
            ),
            'cache_handler' => 
            array (
              'name' => 'cache_handler',
              'desc' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'area_trans' => '',
            ),
            'cache_expires' => 
            array (
              'name' => 'cache_expires',
              'desc' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'area_trans' => '',
            ),
            'pageNavScheme' => 
            array (
              'name' => 'pageNavScheme',
              'desc' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'num_format' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'num_format',
          'description' => 'Number format output filter',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getProducts' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => true,
          'name' => 'getProducts',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * getProducts 1.4rc2
 *
 * Snippet for a print list of resources and objects from any tables. For MODX 2.x.
 *
 * @author Andchir <andchir@gmail.com>
 * @copyright Copyright 2015 http://modx-shopkeeper.ru/
/

/*

getProducts + getPage:

[[!getPage?
&elementClass=`modSnippet`
&element=`getProducts`
&parents=`10`
&limit=`20`
&tvFilters=`{"param":"value"}`
&where=`{"param":"value"}`
&includeTVs=`1`
&includeTVList=`price,image,width,inventory`
&tpl=`product`
&pageFirstTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Первая</a></li>`
&pageLastTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Последняя</a></li>`
]]
<br class="clear" />
<ul class="pages">
[[!+page.nav]]
</ul>
[[+total]]

*/

if( !empty( $scriptProperties[\'debug\'] ) ){
    ini_set(\'display_errors\',1);
    error_reporting(E_ALL);
}

$cached = array();

//Настройки кэширования
if(!empty($scriptProperties[\'gp_cache\'])){
    
    if(empty($scriptProperties[\'cache_key\'])) $scriptProperties[\'cache_key\'] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
    if(empty($scriptProperties[\'cache_checkURL\'])) $scriptProperties[\'cache_checkURL\'] = false;//Не рекомендуется менять значение
    if(empty($scriptProperties[\'cacheId\'])) $scriptProperties[\'cacheId\'] = \'gpCache\';
    if(empty($scriptProperties[\'cache_handler\'])) $scriptProperties[\'cache_handler\'] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
    if(empty($scriptProperties[\'cache_expires\'])) $scriptProperties[\'cache_expires\'] = 0;
    
    if($scriptProperties[\'cache_checkURL\']){
        $scriptProperties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $scriptProperties[\'cacheId\'] . md5(http_build_query($modx->request->getParameters()));
    }else{
        $scriptProperties[\'cachePageKey\'] = $scriptProperties[\'cacheId\'];
    }
    $scriptProperties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $scriptProperties[\'cache_key\'],
        xPDO::OPT_CACHE_HANDLER => $scriptProperties[\'cache_handler\'],
        xPDO::OPT_CACHE_EXPIRES => $scriptProperties[\'cache_expires\'],
    );
    
    $cached = $modx->cacheManager->get($scriptProperties[\'cachePageKey\'], $scriptProperties[\'cacheOptions\']);
    
    //Если есть в кэше, выводим его содержимое
    if(!empty($cached) && isset($cached[\'placeholders\']) && isset($cached[\'output\'])){
        
        $output = $cached[\'output\'];
        $modx->setPlaceholders($cached[\'placeholders\']);
        
        if($toPlaceholder){
            $modx->setPlaceholder($toPlaceholder,$output);
            $output = \'\';
        }
        
        return $output;
        
    }else{
        
        $cached = array();
        
    }
    
}

$output = \'\';

$checkPlaceholders = $modx->placeholders;

require_once MODX_CORE_PATH.\'components/getproducts/model/getproducts.class.php\';
$getProducts = new getProducts($modx,$scriptProperties);

$noResults = $modx->getOption(\'noResults\',$scriptProperties,\'\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,\'\');
$returnIDs = $modx->getOption(\'returnIDs\',$scriptProperties,false);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$debug = $modx->getOption(\'debug\', $scriptProperties, false);

$parents_data = array();

//Ищем товары по заданным условиям
$getProducts->searchProducts();

$total = $getProducts->getTotal();
$modx->setPlaceholder( $totalVar, $total );
if( !$total ) return $noResults;
if( $returnIDs ) return implode( \',\', $getProducts->ids_arr );

//Собираем TV
$getProducts->appendTVs();

//Вытаскиваем данные от родителей, если нужно
$getProducts->appendFromParents();

//Создаём HTML код по шаблону
$output .= $getProducts->getHTMLOutput();

//Кэшируем
if(!empty($scriptProperties[\'gp_cache\'])){
    
    $cached = array(
        \'output\' => $output,
        \'placeholders\' => array_diff_assoc($modx->placeholders, $checkPlaceholders)
    );
    unset($checkPlaceholders);
    
    $modx->cacheManager->set($scriptProperties[\'cachePageKey\'], $cached, $scriptProperties[\'cache_expires\'], $scriptProperties[\'cacheOptions\']);
    
}

if($toPlaceholder){
    $modx->setPlaceholder($toPlaceholder,$output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'activeClass' => 
            array (
              'name' => 'activeClass',
              'desc' => 'Имя CSS-класса для активного ресурса.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя CSS-класса для активного ресурса.',
              'area_trans' => '',
            ),
            'activeParentSnippet' => 
            array (
              'name' => 'activeParentSnippet',
              'desc' => '',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'Сниппет для активного контейнера-ресурса',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => '',
              'area_trans' => '',
            ),
            'addSubItemCount' => 
            array (
              'name' => 'addSubItemCount',
              'desc' => 'В чанке сниппета будет доступен плейсхолдер [[+subitemcount]] - число дочерних ресурсов.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'В чанке сниппета будет доступен плейсхолдер [[+subitemcount]] - число дочерних ресурсов.',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'Имя класса (объекта) элементов таблицы БД.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modResource',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) элементов таблицы БД.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'Режим отладки (1|0). В журнал ошибок будут писаться SQL запросы, полученные в сниппете.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Режим отладки (1|0). В журнал ошибок будут писаться SQL запросы, полученные в сниппете.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Глубина поиска родителей. По умолчанию 1.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Глубина поиска родителей. По умолчанию 1.',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'список полей через запятую, которые нужно добавить товарам от родителей.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'список полей через запятую, которые нужно добавить товарам от родителей.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Включать в выборку из БД значение поля "content" (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Включать в выборку из БД значение поля "content" (1|0).',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Список имён TV, которые нужно добавить через запятую.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список имён TV, которые нужно добавить через запятую.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Добавить плейсхолдеры значений TV для ресурсов (1|0). Префикс для TV: "tv.".',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Добавить плейсхолдеры значений TV для ресурсов (1|0). Префикс для TV: "tv.".',
              'area_trans' => '',
            ),
            'noResults' => 
            array (
              'name' => 'noResults',
              'desc' => 'Текст, который будет выводиться, если по запросу ничего не найдено.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Текст, который будет выводиться, если по запросу ничего не найдено.',
              'area_trans' => '',
            ),
            'orderby' => 
            array (
              'name' => 'orderby',
              'desc' => 'JSON строка сортировки.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка сортировки.',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'Имя пакета элементов таблицы БД.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя пакета элементов таблицы БД.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Список TV через запятую, для которых применять processTVs.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список TV через запятую, для которых применять processTVs.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Применять параметр "Параметры ввода" для TV.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Применять параметр "Параметры ввода" для TV.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'Список ID ресурсов (товаров) через запятую.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список ID ресурсов (товаров) через запятую.',
              'area_trans' => '',
            ),
            'returnIDs' => 
            array (
              'name' => 'returnIDs',
              'desc' => 'Возвращать только ID рессурсов (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Возвращать только ID рессурсов (1|0).',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'Поле для сортировки (только поля ресурсов, без TV).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Поле для сортировки (только поля ресурсов, без TV).',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Сортировка по TV. Указать имя TV.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Сортировка по TV. Указать имя TV.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'Тип значения TV (string|integer).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Тип значения TV (string|integer).',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Направление сортировки.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ASC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Направление сортировки.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Направление сортировки по TV (ASC|DESC).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ASC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Направление сортировки по TV (ASC|DESC).',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'Имя плейсхолдера, в который нужно отправить результат работы сниппета. По умолчанию не используется.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера, в который нужно отправить результат работы сниппета. По умолчанию не используется.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'Имя плейсхолдера с общим количеством ресурсов.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера с общим количеством ресурсов.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Имя чанка шаблона для вывода ресурса.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя чанка шаблона для вывода ресурса.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'JSON строка фильтрации по ТВ.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка фильтрации по ТВ.',
              'area_trans' => '',
            ),
            'useSmarty' => 
            array (
              'name' => 'useSmarty',
              'desc' => 'Использовать в чанке шаблонизатор Smarty (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Использовать в чанке шаблонизатор Smarty (1|0).',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'JSON строка для условия WHERE в SQL запросе.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка для условия WHERE в SQL запросе.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => true,
          'static_file' => 'core/components/getproducts/snippet.getproducts.php',
          'content' => '/**
 * getProducts 1.4rc2
 *
 * Snippet for a print list of resources and objects from any tables. For MODX 2.x.
 *
 * @author Andchir <andchir@gmail.com>
 * @copyright Copyright 2015 http://modx-shopkeeper.ru/
/

/*

getProducts + getPage:

[[!getPage?
&elementClass=`modSnippet`
&element=`getProducts`
&parents=`10`
&limit=`20`
&tvFilters=`{"param":"value"}`
&where=`{"param":"value"}`
&includeTVs=`1`
&includeTVList=`price,image,width,inventory`
&tpl=`product`
&pageFirstTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Первая</a></li>`
&pageLastTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Последняя</a></li>`
]]
<br class="clear" />
<ul class="pages">
[[!+page.nav]]
</ul>
[[+total]]

*/

if( !empty( $scriptProperties[\'debug\'] ) ){
    ini_set(\'display_errors\',1);
    error_reporting(E_ALL);
}

$cached = array();

//Настройки кэширования
if(!empty($scriptProperties[\'gp_cache\'])){
    
    if(empty($scriptProperties[\'cache_key\'])) $scriptProperties[\'cache_key\'] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
    if(empty($scriptProperties[\'cache_checkURL\'])) $scriptProperties[\'cache_checkURL\'] = false;//Не рекомендуется менять значение
    if(empty($scriptProperties[\'cacheId\'])) $scriptProperties[\'cacheId\'] = \'gpCache\';
    if(empty($scriptProperties[\'cache_handler\'])) $scriptProperties[\'cache_handler\'] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
    if(empty($scriptProperties[\'cache_expires\'])) $scriptProperties[\'cache_expires\'] = 0;
    
    if($scriptProperties[\'cache_checkURL\']){
        $scriptProperties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $scriptProperties[\'cacheId\'] . md5(http_build_query($modx->request->getParameters()));
    }else{
        $scriptProperties[\'cachePageKey\'] = $scriptProperties[\'cacheId\'];
    }
    $scriptProperties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $scriptProperties[\'cache_key\'],
        xPDO::OPT_CACHE_HANDLER => $scriptProperties[\'cache_handler\'],
        xPDO::OPT_CACHE_EXPIRES => $scriptProperties[\'cache_expires\'],
    );
    
    $cached = $modx->cacheManager->get($scriptProperties[\'cachePageKey\'], $scriptProperties[\'cacheOptions\']);
    
    //Если есть в кэше, выводим его содержимое
    if(!empty($cached) && isset($cached[\'placeholders\']) && isset($cached[\'output\'])){
        
        $output = $cached[\'output\'];
        $modx->setPlaceholders($cached[\'placeholders\']);
        
        if($toPlaceholder){
            $modx->setPlaceholder($toPlaceholder,$output);
            $output = \'\';
        }
        
        return $output;
        
    }else{
        
        $cached = array();
        
    }
    
}

$output = \'\';

$checkPlaceholders = $modx->placeholders;

require_once MODX_CORE_PATH.\'components/getproducts/model/getproducts.class.php\';
$getProducts = new getProducts($modx,$scriptProperties);

$noResults = $modx->getOption(\'noResults\',$scriptProperties,\'\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,\'\');
$returnIDs = $modx->getOption(\'returnIDs\',$scriptProperties,false);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$debug = $modx->getOption(\'debug\', $scriptProperties, false);

$parents_data = array();

//Ищем товары по заданным условиям
$getProducts->searchProducts();

$total = $getProducts->getTotal();
$modx->setPlaceholder( $totalVar, $total );
if( !$total ) return $noResults;
if( $returnIDs ) return implode( \',\', $getProducts->ids_arr );

//Собираем TV
$getProducts->appendTVs();

//Вытаскиваем данные от родителей, если нужно
$getProducts->appendFromParents();

//Создаём HTML код по шаблону
$output .= $getProducts->getHTMLOutput();

//Кэшируем
if(!empty($scriptProperties[\'gp_cache\'])){
    
    $cached = array(
        \'output\' => $output,
        \'placeholders\' => array_diff_assoc($modx->placeholders, $checkPlaceholders)
    );
    unset($checkPlaceholders);
    
    $modx->cacheManager->set($scriptProperties[\'cachePageKey\'], $cached, $scriptProperties[\'cache_expires\'], $scriptProperties[\'cacheOptions\']);
    
}

if($toPlaceholder){
    $modx->setPlaceholder($toPlaceholder,$output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);