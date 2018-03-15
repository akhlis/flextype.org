<?php namespace Rawilum;

use Arr;
use Url;
use Response;
use Shortcode;
use Symfony\Component\Yaml\Yaml;

/**
 * @package Rawilum
 *
 * @author Sergey Romanenko <awilum@yandex.ru>
 * @link http://rawilum.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Pages
{
    /**
     * @var Rawilum
     */
    protected $rawilum;

    /**
     * @var Page
     */
    public $page;

    /**
     * Constructor
     *
     * @param Rawilum $rawilum
     */
    public function __construct(Rawilum $c)
    {
        $this->rawilum = $c;

        // Register page shortcodes
        $this->pageShortcodes();
    }

    protected function pageShortcodes() {
        // {site_url}
        $this->rawilum['shortcodes']->add('site_url', function() {
            return Url::getBase();
        });
    }

    /**
     * Page finder
     */
    public function finder($url = '', $url_abs = false)
    {

        // If url is empty that its a homepage
        if ($url_abs) {
            if ($url) {
                $file = $url;
            } else {
                $file = PAGES_PATH . '/' . $this->rawilum['config']->get('site.pages.main') . '/' . 'index.md';
            }
        } else {
            if ($url) {
                $file = PAGES_PATH . '/' . $url . '/index.md';
            } else {
                $file = PAGES_PATH . '/' . $this->rawilum['config']->get('site.pages.main') . '/' . 'index.md';
            }
        }

        // Get 404 page if file not exists
        if ($this->rawilum['filesystem']->exists($file)) {
            $file = $file;
        } else {
            $file = PAGES_PATH . '/404/index.md';
            Response::status(404);
        }

        return $file;
    }

    /**
     * Render page
     */
    public function renderPage()
    {
        $page = $this->page ;

        $template_ext  = '.php';
        $template_name = empty($page['template']) ? 'index' : $page['template'];
        $site_theme    = $this->rawilum['config']->get('site.theme');
        $template_path = THEMES_PATH . '/' . $site_theme . '/' . $template_name . $template_ext;

        if ($this->rawilum['filesystem']->exists($template_path)) {
            include $template_path;
        } else {
            throw new RuntimeException("Template {$template_name} does not exist.");
        }
    }

    /**
     * Page parser
     */
    public function parse($file)
    {
        $page = trim(file_get_contents($file));
        $page = explode('---', $page, 3);

        $frontmatter = $this->rawilum['shortcodes']->parse($page[1]);
        $result_page = Yaml::parse($frontmatter);
        $result_page['content'] = $page[2];

        return $result_page;
    }


    /**
     * Get page
     */
    public function getPage($url = '', $raw = false, $url_abs = false)
    {
        $file = $this->finder($url, $url_abs);

        if ($raw) {
            $page = trim(file_get_contents($file));
            $this->page = $page;
            $this->rawilum['events']->dispatch('onPageContentRawAfter');
        } else {
            $page = $this->parse($file);
            $this->page = $page;
            $this->page['content'] = $this->rawilum['filters']->dispatch('content', $this->parseContent($this->page['content']));
            $this->rawilum['events']->dispatch('onPageContentAfter');
        }

        return $this->page;
    }

    public function parseContent($content)
    {
        $content = $this->rawilum['shortcodes']->parse($content);
        $content = $this->rawilum['markdown']->text($content);

        return $content;
    }

    /**
     * getPage
     */
    public function getPages($url = '', $raw = false, $order_by = 'title', $order_type = 'DESC', $ignore = ['404', 'index'], $limit = null)
    {
        // Get pages list for current $url
        $pages_list = $this->rawilum['finder']->files()->name('*.md')->in(PAGES_PATH . '/' . $url);

        // Go trough pages list
        foreach ($pages_list as $key => $page) {
            $pages[$key] = $this->getPage($page->getPathname(), $raw, true);
        }

        // Sort and Slice pages if !$raw
        if (!$raw) {
            $pages = Arr::subvalSort($pages, $order_by, $order_type);

            if ($limit != null) {
                $pages = array_slice($_pages, null, $limit);
            }
        }

        return $pages;
    }
}
