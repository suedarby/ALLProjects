<?php require_once('../../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/head.php'); ?>
<?php $page_title = 'Dashboard' ?>
<title>Sewing Project Manager - <?php echo $page_title; ?></title>


 
  <body>

    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><title>Bootstrap</title></a>

  <div class="navbar-nav-scroll">
    <ul class="navbar-nav bd-navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link " href="">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="">Documentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">Examples</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Icons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" target="_blank" rel="noopener">Themes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" target="_blank" rel="noopener">Expo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Blog</a>
      </li>
    </ul>
  </div>

  <ul class="navbar-nav ml-md-auto">
    <li class="nav-item dropdown">
      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        v4.4
      </a>
      <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
        <a class="dropdown-item active" href="">Latest (4.4.x)</a>
        <a class="dropdown-item" href="">v4.3.1</a>
        <a class="dropdown-item" href="">v4.2.1</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/">v4 Alpha 6</a>
             <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="">All versions</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link p-2" href=""><title>GitHub</title></a>
    </li>
    <li class="nav-item">
      <a class="nav-link p-2" href="" ><title>Twitter</title></a>
    </li>
    <li class="nav-item">
      <a class="nav-link p-2" href=""><title>Slack</title></a>
    </li>
    </ul>

  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/docs/4.4/getting-started/download/">Download</a>
</header>


    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-md-3 col-xl-2 bd-sidebar">
          <form role="search" class="bd-search d-flex align-items-center">
  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off" data-docs-version="4.4">
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"></button>
</form>

<nav class="collapse bd-links" id="bd-docs-nav" aria-label="Main navigation"><div class="bd-toc-item">
      <a class="bd-toc-link" href="">
        Getting started
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="">
              Introduction
            </a>
          </li><li>
            <a href="/docs/4.4/getting-started/download/">
              Download
            </a>
          </li><li>
            <a href="/docs/4.4/getting-started/contents/">
              Contents
            </a>
          </li><li>
            <a href="/docs/4.4/getting-started/browsers-devices/">
              Browsers & devices
            </a>
          </li><li>
            <a href="/docs/4.4/getting-started/build-tools/">
              Build tools
            </a>
        </ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/layout/overview/">
              Overview
            </a>
          </li><li>
            <a href="/docs/4.4/layout/grid/">
              Grid
            </a>
          </li><li>
            <a href="/docs/4.4/layout/utilities-for-layout/">
              Utilities for layout
            </a>
          </li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/content/reboot/">
        Content
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/content/reboot/">
              Reboot
            </a>
          </li><li>
            <a href="/docs/4.4/content/typography/">
              Typography
            </a>
          </li><li>
            <a href="/docs/4.4/content/code/">
              Code
            </a>
          </li><li>
            <a href="/docs/4.4/content/images/">
              Images
            </a>
          </li><li>
            <a href="/docs/4.4/content/tables/">
              Tables
            </a>
          </li><li>
            <a href="/docs/4.4/content/figures/">
              Figures
            </a>
          </li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/components/alerts/">
              Alerts
            </a>
          </li><li>
            <a href="/docs/4.4/components/badge/">
              Badge
            </a>
          </li><li>
            <a href="/docs/4.4/components/breadcrumb/">
              Breadcrumb
            </a>
          </li><li>
            <a href="/docs/4.4/components/buttons/">
              Buttons
            </a>
          </li><li>
            <a href="/docs/4.4/components/dropdowns/">
              Dropdowns
            </a>
          </li><li>
            <a href="/docs/4.4/components/spinners/">
              Spinners
            </a>
          </li><li>
            <a href="/docs/4.4/components/toasts/">
              Toasts
            </a>
          </li><li>
            <a href="/docs/4.4/components/tooltips/">
              Tooltips
            </a>
          </li></ul>
    </div><div class="bd-toc-item active">
      <a class="bd-toc-link" href="/docs/4.4/utilities/borders/">
        Utilities
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/utilities/borders/">
              Borders
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/clearfix/">
              Clearfix
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/close-icon/">
              Close icon
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/colors/">
              Colors
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/display/">
              Display
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/embed/">
              Embed
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/flex/">
              Flex
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/float/">
              Float
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/stretched-link/">
              Stretched link
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/text/">
              Text
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/vertical-align/">
              Vertical align
            </a>
          </li><li>
            <a href="/docs/4.4/utilities/visibility/">
              Visibility
            </a>
          </li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/extend/approach/">
        Extend
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/extend/approach/">
              Approach
            </a>
          </li><li>
            <a href="/docs/4.4/extend/icons/">
              Icons
            </a>
          </li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/migration/">
        Migration
      </a>

      <ul class="nav bd-sidenav"></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/docs/4.4/about/overview/">
        About
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/docs/4.4/about/overview/">
              Overview
            </a>
          </li>
        </ul>
    </div></nav>

        </div>

        

        <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Overflow</h1>
          <p class="bd-lead">Use these shorthand utilities for quickly configuring how content overflows an element.</p>
             <p>Barebones <code class="highlighter-rouge">overflow</code> functionality is provided for two values by default, and they are not responsive.</p>

<div class="bd-example d-md-flex">
  <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-auto</code> on an element with set width and height dimensions. By design, this content will vertically scroll.
  </div>
  <div class="overflow-hidden p-3 bg-light" style="max-width: 260px; max-height: 100px;">
    This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions.
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"overflow-auto"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"overflow-hidden"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Using Sass variables, you may customize the overflow utilities by changing the <code class="highlighter-rouge">$overflows</code> variable in <code class="highlighter-rouge">_variables.scss</code>.</p>

        </main>
      </div>
    </div>

  </body>
</html>
