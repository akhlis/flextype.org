## [0.9.3] - 2019-07-07
### Fixed
- Flextype Core: Entries - issue with binding arguments inside method fetchAll() - fixed. #182
- Flextype Core: Entries - issue with possible boolean false result from Filesystem::getTimestamp() inside method fetchAll() - fixed. #182
- Flextype Core: Entries - issue with possible boolean false result from Filesystem::getTimestamp() inside method fetch() - fixed. #182
- Flextype Admin Panel: critical issue with possibility to register two admins! - fixed. #183 #182
- Flextype Admin Panel: Left Navigation - active state for Templates area - fixed. #182
- Flextype Default Theme: issue with `TypeError: undefined is not an object` for lightbox - fixed. #182
- Flextype Default Theme: fix thumbnail image for Default Theme #182


## [0.9.2] - 2019-07-06
### Added
- Flextype Default Theme: pagination for blog entries added. #164 #165
- Flextype Default Theme: New templates for entry Gallery - added. #165
- Flextype Core: New Shortcode [registry_get] - added. #165
- Flextype Core: New entry Gallery - added. #165
- Flextype Core: New fieldsets for entry Gallery - added. #165
- Flextype Core: Doctrine Collections - added. #175 #165
- Flextype Core: GlobalVarsTwigExtension - new variable - `PHP_VERSION` - added. #165
- Flextype Core: FilesystemTwigExtension - new function `filesystem_get_files_list` added. #165
- Flextype Core: Snippets - new snippet `google-analytics` added. #165
- Flextype Core: Fieldsets Content - menu_item_target fixed. #165
- Flextype Admin Panel: Show nice message if there is no items for current area. #158 #165
- Flextype Admin Panel: Tools - added. #170 #165
- Flextype Admin Panel: Tools - Cache area added. #170 #165
- Flextype Admin Panel: Tools - Registry area added. #170 #165
- Flextype Admin Panel: Themes manager added. #171 #165
- Flextype Admin Panel: New Translates added. #165

### Changed
- Flextype Core: All Twig Extensions - refactored and updated. #165
- Flextype Core: Entries - new params `$id` and `$args` for `fetchAll()` method. #165
- Flextype Core: Entries - fetching methods updated and ready to work with Collections. #175 #165
- Flextype Core: Snippets Shortcode - renamed `snippets_fetch` to `snippets_exec`. #165
- Flextype Admin Panel: Entires - improved styles for fieldsets tabs. #165
- Flextype Admin Panel: Entires - styles for Fieldsets tabs improved #165
- Flextype Admin Panel & Flextype Core: Settings improvements #153 #165
- Flextype Admin Panel: Entries - show entry slug if entry default field is empty. #165
- Flextype Admin Panel: Stay on current page after saving. #155 #165

### Fixed
- Flextype Core & Admin and Default theme: wrong `emmiter_emmit` renamed to correct `emitter_emit` #165
- Flextype Admin Panel: Entries - issues with hardcoded admin url - fixed. #165
- Flextype Admin Panel: Entries - `PATH_FIELDSETS` used instead of hardcoded path. #165
- Flextype Admin Panel: fix all tabs state for Fieldsets, Snippets, Templates areas. #165
- Flextype Admin Panel: Entries - move functionality issues #179 #165

### Removed
- Flextype Admin Panel: Left Navigation - documentation link - removed #165

## [0.9.1] - 2019-06-18
### Added
- Flextype Admin Panel: new setting `route` added to customize admin base route. #154
- Flextype Core: GlobalVarsTwigExtension - new global constant `PATH_FIELDSETS` added. #154
- Flextype Core: Entries API - public property `$entry` added. #154
- Flextype Core: Entries API - public property `$entries` added. #154
- Flextype Core: Entries API - new event `onEntryAfterInitialized` added. #154
- Flextype Core: Entries API - new event `onEntriesAfterInitialized` added. #154
- Flextype Core: Shortcodes - `EntriesShortcode` added. #154
- Flextype Core: Shortcodes - `BaseUrlShortcode` added. #154
- Flextype Core: Snippets - SnippetsTwigExtension: `snippets_exec()` added. #154
- Flextype Core: Snippets - `[snppets_fetch]` shortcode added. #154
- Flextype Core: Snippets - `_exec_snippet()` method added. #154
- Flextype Core: Snippets - `exec()` method added. #154
- Flextype Core: Snippets - added ability to access $flextype and $app inside snippets. #154
- Flextype Core: GlobalVarsTwigExtension `FLEXTYPE_VERSION` added. #154
- Flextype Site Plugin: public property `$entry` added. #154
- Flextype Site Plugin: new event `onSiteEntryAfterInitialized` added. #154

### Fixed
- Flextype Core: Entries API - `fetchALL()` issue with fetching entries recursively fixed. #154 #161

### Changed
- Flextype Site: code refactoring. #154
- Flextype Admin Panel: code refactoring. #154
- Flextype Core: Snippets - from now we will set prefix `bind_` for all variables. #154

### Removed
- Flextype Core: Entries API - remove unused Shortcodes code from method `fetch()` #162
- Flextype Core: Shortcodes - `SiteUrlShortcode` removed. #154
- Flextype Core: Snippets - `SnippetsTwigExtension`: snippet removed. #154
- Flextype Core: Snippets - `[snippets]` shortcode removed. #154
- Flextype Core: Snippets - `_display_snippet()` method removed. #154
- Flextype Core: Snippets - `- display()` method removed. #154
- Flextype Core: GlobalVarsTwigExtension `flextype_version` removed. #154

## [0.9.0] - 2019-06-14
### Added
- Flextype Core: Slim Framework Integration!
- Flextype Core: Twig Template Engine Integration!
- Flextype Core: Whoops Error Handler Integration!
- Flextype Core: Monolog library Integration!
- Flextype Core: Slugify library Integration!
- Flextype Core: Complete Glide/Intervention Image Implemented for Image manipulation on fly!
- Flextype Core: New Event handler from The League of Extraordinary Packages for better event handling.
- Flextype Core: New Entries API
- Flextype Core: New Fieldsets API
- Flextype Core: New Snippets API
- Flextype Core: New Plugins API
- Flextype Core: New JSON Parser instead of old YAML Parser.
- Flextype Core: Using new languages files format and JSON extension instead of YAML.
- Flextype Core: Using JSON extension instead of YAML for all kind of data to store.
- Flextype Core: New CSRF service for better cross-site request forgery protection.
- Flextype Core: composer.json ext-json and ext-mbstring added into require section.
- Flextype Core: composer.json suggest section added.
- Flextype Core: composer.json: apcu-autoloader added for APCu cache as a fallback for the class map.
- Flextype Site: New plugin Site added.
- Flextype Core: Respect Validation - The most awesome validation engine ever created for PHP - added.
- Flextype Admin Panel: New admin panel plugin based on Slim Framework.
- Flextype Admin Panel: Fieldset Sections(groups) added.
- Flextype Admin Panel: New Field types - select, editor (instead of html)

### Changed
- Flextype Core: Thunderer Shortcodes don't parse fields by default, need to use filter.
- Flextype Core: Thunderer Shortcodes updated to 0.7.2.
- Flextype Core: Flextype Components Arr updated to 1.2.5
- Flextype Core: Flextype Components Number updated to 1.1.0
- Admin Panel: Bootstrap updated to 4.3.1
- Admin Panel: Codemirror updated to 5.43.0
- Admin Panel: Trumbowyg updated to 2.18.0
- Admin Panel: Settings Manager - locales list - improvements!

### Fixed
- Admin Panel: Translates fixes.
- Admin Panel: Issue with js error for codemirror - fixed.
- Flextype Core: Plugins API - issue with plugins list fixed.

### Removed
- Flextype Admin Panel: Menus Manager removed.
- Flextype Core: YAML Parser removed.
- Flextype Core: Symfony YAML Component removed.
- Flextype Core: Flextype Token Component removed.
- Flextype Core: Flextype Notification Component removed.
- Flextype Core: Flextype Error Handler Component removed.
- Flextype Core: Flextype Event Component removed.

## [0.8.3] - 2019-01-16
### Added
- Admin Panel: New Gorgeous Light Theme for Admin panel!
- Admin Panel: Settings Manager - ability to change admin panel theme - added.
- Admin Panel: Settings Manager - Select dropdown for cache driver - added.
- Flextype Core: Cache - new cache driver Array - added.
- Flextype Core: Cache - new cache driver SQLite3 - added.
- Flextype Core: Cache - new cache driver Zend - added.

### Changed
- Flextype Core: Symfony Yaml updated to 4.2.2.
- Admin Panel: Settings Manager - cache settings editing - improvements.
- Flextype Core: default settings - refactoring.

### Fixed
- Flextype Core: Cache - issue with selecting current driver_name - fixed.
- Admin Panel: Dark Theme fixes.
- Admin Panel: Translates fixes.
- Admin Panel: Typo fixes.

## [0.8.2] - 2019-01-09
### Added
- Admin Panel: ClipboardJS added!
- Admin Panel: Media Manager - Twitter Bootstrap File browser - added.
- Admin Panel: Snippets Manager: Embeded code info modal added.
- Admin Panel: Settings Manager - Select dropdown for default entry - added.
- Admin Panel: Settings Manager - Select dropdown for timezones - added.
- Admin Panel: Settings Manager - Select dropdown for themes - added.

### Changed
- Flextype Core: Text Components updated to 1.1.2.
- Admin Panel: Entries Manager - upload file size increased to 27000000 bytes.

### Fixed
- Flextype Core: Default theme - issue with package.json - fixed.
- Flextype Core: Code fixes according to the phpDocumentor.
- Flextype Core: Default theme - settings and manifest - fixes.
- Admin Panel: Translates fixes.

## [0.8.1] - 2019-01-07
### Added
- Flextype Core: Glide/Intervention Image Implemented for Image manipulation!
- Flextype Core: Cache - ability to delete glide cache folder added.

### Changed
- Flextype Core: Thunderer Shortcode updated to 0.7.0 - over 10x performance and memory usage improvement!
- Flextype Core: Default settings updates.
- Flextype Core: Arr Components updated to 1.2.4.
- Flextype Core: Default theme - Twitter Bootstrap update to 4.2.1
- Admin Panel: Media Manager - uploader improvements
- Admin Panel: Menus Manager - menus name are clickable now.
- Admin Panel: Fieldsets Manager - fieldsets name are clickable now.
- Admin Panel: Templates Manager - templates and partials name are clickable now.
- Admin Panel: Snippets Manager - snippets name are clickable now.
- Admin Panel: Settings Manager - look and feel improvements.
- Admin Panel: Twitter Bootstrap update to 4.2.1

### Fixed
- Admin Panel: Snippets Manager - shortcode issue - fixed.
- Admin Panel: gulpfile - issue with duplicated codemirror - fixed.
- Admin Panel: Trumbowyg styles fixes.
- Admin Panel: Plugins Manager - issue with broken homepage url in the Info Modal - fixed.

## [0.8.0] - 2018-12-28
### Added
- Flextype Core: To improve engine flexibility was decided to use entity name Entries/Entry instead of entity name Pages/Page.
- Flextype Core: New folder `/site/entries/` added.
- Flextype Core: New entry variable `base_url` added.
- Flextype Core: Snippets functionality added.
- Flextype Core: New constant PATH['snippets'] added for Snippets.
- Flextype Core: New folder `/site/snippets/` added.
- Flextype Core: Menus functionality added.
- Flextype Core: New folder `/site/menus/` added.
- Flextype Core: Fieldsets functionality added.
- Flextype Core: Fallback functionality for settings added.
- Flextype Core: New settings item `accept_file_types` added.
- Flextype Core: Common PHP Overrides added to .htaccess
- Flextype Core: Custom YamlParser with native support to increase system performance added.
- Flextype Core: Ability to get hidden entries for method getEntries() added.
- Flextype Core: New setting options `entries.error404` for error404 page added.
- Admin Panel: Fieldsets Manager added.
- Admin Panel: Menus Manager added.
- Admin Panel: Snippets Manager added.
- Admin Panel: Templates Manager added.
- Admin Panel: Entries Manager with nice one level tree view for pages list added.
- Admin Panel: Português locale added.
- Admin Panel: General - trumbowyg - table plugin added.
- Flextype new Default Theme with predefined Fieldsets and Entries templates added.

### Changed
- Flextype Core: Plugins - Locales Array updated.
- Flextype Core: Form Components updated to 1.0.2.
- Flextype Core: Filesystem Components updated to 1.1.5.
- Flextype Core: Content - used new updated getFilesList() method.
- Flextype Core: Updated order of params in getEntries() method.
- Admin Panel: Settings Manager - display only available locales.
- Admin Panel: Profile Manager - improvements for profile look and feel.
- Admin Panel: Entries Manager - Form Genetator will not create labels for hidden inputs.
- Admin Panel: Plugins Manager - Get More Plugins button moved to the right.
- Admin Panel: General - trumbowyg editor styles updates.
- Admin Panel: General - trumbowyg updated to 2.13.0
- Admin Panel: Font Awesome updated to 5.6.3.
- Admin Panel: General - Messenger moved to to the bottom.
- Admin Panel: General - updates according to the php template syntax guidelines.
- Admin Panel: Pages Manager - use defined file types (extensions to be exact) that are acceptable for upload.

### Fixed
- Flextype Core: Content - Issue with returned value of Arr::sort() fixed.
- Admin Panel: General - translates fixes.

### Removed
- Flextype Core: Blueprints functionality removed.
- Flextype Core: Pages functionality removed.
- Flextype Core: Error404 page removed from `/site/entries/` folder.
- Flextype Core: Folder `/site/pages/` removed.
- Flextype Core: Dot from `date_format` setting removed.
- Flextype Simple Theme removed.


## [0.7.4] - 2018-12-14
* Content: new frontMatterParser() - added
* Config: set error reporting - false
* Update theme simple according to the php template syntax guidelines
* Super heavy "imagine/imagine": "1.2.0" - removed
* Flextype Component - Errorhandler updated to 1.0.5

## [0.7.3] - 2018-12-13
* Content: visibility hidden for pages - added
* Settings merged into one settings.yaml file
* Using Imagine library for image manipulation
* Flextype Component - I18n updated to 1.2.0
* Flextype Component - Filesystem updated to 1.1.3
* Symfony YAML - updated to 4.2.1

## [0.7.2] - 2018-11-24
* Flextype Component - Cookie updated to 1.2.0
* Flextype Component - Filesystem updated to 1.1.2

## [0.7.1] - 2018-11-17
* Plugins: New method getLocales() added
* Content: processPage() - ability to ignore content parsing - added.

## [0.7.0] - 2018-11-16
* Update Symfony YAML to 4.1.1
* Update Text Component to 1.1.0
* Update Session Component to 1.1.1
* Update Doctrine Cache to 1.8.0
* Update I18n Component to 1.1.0
* Update Token Component to 1.2.0
* Content: field 'published' changed to 'visibility'
* Plugins: from now no need to add plugin names manually to the site.yaml
* Plugins: added ability to load plugins settings.yaml file
* Plugins: from now plugins configurations stored in the plugin-name/settings.yaml file
* Add system.yaml config file and use it for system configurations
* Themes: added ability to load themes settings.yaml file
* Themes: from now themes configurations stored in the theme-name/settings.yaml file

## [0.6.1] - 2018-06-17
* Fixed issue with not found pages status code
* Fixed Singleton classes and methods visibility changed from protected to private
* Added require vendors versions in composer.json
* Fixed Simple Theme styles

## [0.6.0] - 2018-06-09
* Content: Markdown(Parsedown) parser removed! From now we are using plain HTML + Shortcodes
* Theme Simple: Cross-site scripting Vulnerabilities fixes
* Improving main .htaccess
* Code cleanup and refactoring #5

## [0.5.0] - 2018-06-03
* Delete folders: site/data and site/accounts
* Delete folders: site/blocks and site/cache and site/logs
* Constants: accounts, blocks, data - removed.
* Flextype: new method setSiteConfig() added
* Flextype: new method setErrorHandler() updates
* Flextype: new method setErrorHandler() added
* Content: new protected method initParsers()
* Content: Blocks functionality removed - use Block Plugin
* Content: Section shortcode removed - use Section plugin
* Content: Site Url shortcode removed - use Site Url plugin
* Content: Registry shotcode remobed - use Registry plugin
* Content: Prevents automatic linking of URLs for Markdown parser
* Content: Method registerDefaultShortcodes() removed

## [0.4.4] - 2018-05-29
* Content: added ability to work with CONTENT SECTIONS with help of shortcodes [section] and [section_create]
* Content: getPage() method will only return data about requested page and will not insert them in global $page array.
* Content: events: onPageContentAfter and onPageContentRawAfter was removed from getPage(), use event onCurrentPageBeforeDisplayed instead.
* Site Config: new items added: robots and description
* Theme Simple: Using Assets Component for css and js
* Theme Simple: New head meta added: description, keywords, robots, generator
* Theme Simple: Meta charset getting from registry site.charset
* Theme Simple: Fixed issue with broken paths for JS
* Theme Simple: gulpfile: build process updated
* Theme Simple: package.json: added gulp-concat and gulp-sourcemaps

## [0.4.3] - 2018-05-28
* Content: set text/html request headers for displayCurrentPage() method
* Content: processCurrentPage() method added
* Content: event names changed: onPageBeforeRender to onCurrentPageBeforeProcessed
* Content: event names changed: onPageAfterRender to onCurrentPageAfterProcessed
* robots.txt file was removed, use Robots plugin instead
* Code cleanup and refactoring #5

## [0.4.2] - 2018-05-22
* Settings: cache.enabled is true from now
* Content: new methods added: initShortcodes() initMarkdown() markdown()
* Events: new events added: onMarkdownInitialized and onShortcodesInitialized

## [0.4.1] - 2018-05-20
* Fixing issues with cache for getPages() method.
* Fixing issues with processPage() method.
* Fixing issues with all public methods in Cache class, from now all methods are static.
* Setting site.pages.flush_cache was removed from site.yaml file.

## [0.4.0] - 2018-05-16
* Using SCSS for Simple theme
* Using Flextype Form Component
* Themes: class bug fixes
* Plugins: access for $locales changed to private
* Plugins: cache bug fixes
* New powerful Content class added for working with content instead of Pages, Shortcode, Markdown
* Content: new page field: `published` added
* Content: method for page blocks added
* Content: cache added for pages and blocks
* define CONSTANTS in PHP7 style
* Themes: changing from template() to view()

## [0.3.0] - 2018-05-05
* Using Flextype Components instead of Symphony Components
* Available Flextype Components for developers: Arr, Assets, Cookie, Date, Debug, ErrorHandler, Event, Filesystem, Html, Http, I18n, Notification, Number, Registry, Session, Text, Token, View.
* Using `.yaml` files instead of `.yml`
* Default theme from now is `simple`
* Themes structure is changed. From now main folder for all theme templates and partials is `views` inside theme folder.
* Templates moved to `/simple/views/templates/` and partials moved to `/simple/views/partials/`
* Default template changes from `index.php` to `default.php`
* Plugins templates can be overridden by templates in themes folder.
* For pages we will not use `index.md` anymore. From now page file will have a name `page.md`
* Config class was removed, from now we will use simple powerful Registry Component to access configurations.
* Event, Filter, View class was removed. From now we are using more powerful Flextype Components!
* Fixed issue with getPages() method.
* Twitter Bootstrap updated to 4.1.0 for default theme.
* ErrorHandler added with errors logs.
* Code cleanup and refactoring #5

## [0.2.1] - 2018-03-26
* date_format setting added to /site/config.site.yml
* Pages: Fixed bug with pages sort and slice in getPages() method
* Pages: Fixed bug with pages list for /pages folder
* Pages: Fixes for generating page url field
* Pages: Added ability to create date field automatically for pages if date field is not exists.
* Code cleanup and refactoring #5

## [0.2.0] - 2018-03-23
* Thunderer Shortcode Framework - added
* Cache Flextype::VERSION for cache key - added
* flextype/boot/shortcodes.php	- removed
* flextype/boot/events.php - removed
* Code cleanup and refactoring #5

## [0.1.0] - 2018-03-21
* Initial Release
