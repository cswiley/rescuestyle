<?php

use RescueStyle\Twig;

class StyleGuide {

    private static $dirPath = __DIR__ . '/Views/styleguide';
    private static $views = __DIR__ . '/Views';
    private $base = '';
    private $scripts = [];
    private $styles = [];
    private $directory;

    function __construct($opts)
    {
        if (! empty($opts['base'])) {
            $this->base = $opts['base'];
        }

        if (!empty($opts['directory'])) {
            $this->directory = $opts['directory'];
        }

        if (! empty($this->base)) {
            $this->base = rtrim($this->base, '/') . '/';
        }
        $this->base = '/' . ltrim($this->base, '/');

        if (! empty($opts['scripts'])) {
            $this->scripts = $opts['scripts'];
        }
        if (! empty($opts['styles'])) {
            $this->styles = $opts['styles'];
        }
    }

    static function code($title, $html = '', $code = '', $comment = '')
    {
        if ($code === '') {
            $code = $html;
        }

        $showCode = empty($html) && !empty($code);

        return static::partial('code', [
            'title'    => $title,
            'code'     => $code,
            'html'     => $html,
            'showCode' => $showCode,
            'comment'  => $comment
        ]);
    }

    static function view($path, $data = [], $return = false)
    {
        $filePath = $path;
        // Add php extension when no extension exists
        if (!preg_match('/\.[a-z_\-0-9]+$/i', $filePath)) {
            $filePath = $path . '.php';
        }

        $data      = empty($data) ? [] : $data;
        ob_start(); // turn on output buffering
        extract($data);
        include($filePath);
        $content = ob_get_contents(); // get the contents of the output buffer
        ob_end_clean();
        if ($return) {
            return $content;
        }
        echo $content;

        return true;
    }

    static function partial($file, $data = null, $return = false)
    {
        if (empty($data)) {
            $data = [];
        }
        $file     = 'partials/' . $file;
        $ext      = '.twig';
        $template = Twig::get(static::$views)->load($file . $ext);
        $html     = $template->render($data);
        if ($return) {
            return $html;
        }
        echo $html;
    }

    function renderGuide($path, $data = [], $return = false)
    {
        $data = array_merge($data, [
            'pageName' => 'styleguide'
        ]);

        if (! empty($this->styles)) {
            $data['styles'] = $this->styles;
        }

        if (! empty($this->scripts)) {
            $data['scripts'] = $this->scripts;
        }

        $html  = static::partial("header", $data, true);
        $html .= static::view($path, $data, true);
        $html .= static::partial("footer", $data, true);

        if ($return) {
            return $html;
        }

        echo $html;
    }

    private function getNavListing($directoryPath)
    {
        $directoryIterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directoryPath, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST,
            RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
        );

        $dirListing = [];
        foreach ($directoryIterator as $path => $dir) {
            if ($dir->isFile()) {
                $list      = explode('/', $path);
                $file      = array_pop($list);
                $directory = array_pop($list);

                $dirListing[$directory]   = (empty($dirListing[$directory])) ? [] : $dirListing[$directory];
                $dirListing[$directory][] = $file;
            }
        }

        $navListing = [];
        foreach ($dirListing as $name => $files) {
            $navListing[$name] = array_map(function ($file) use ($directoryPath) {
                $fileName = preg_replace('/\.[\w]+/', '', $file);

                return [
                    'file' => $fileName,
                    'name' => preg_replace('/[_-]/', ' ', $fileName),
                ];
            }, $files);
        }

        return $navListing;
    }

    function selectPath($base, $extraListing)
    {
        return isset($extraListing[$base]) ? $this->directory : static::$dirPath;
    }

    function render($segments, $routePath)
    {
        Twig::set(static::$views);

        $navListing = $this->getNavListing(static::$dirPath);

        if (file_exists($this->directory)) {
            $extraListing = $this->getNavListing($this->directory);
            $navListing = array_merge($navListing, $extraListing);
        }

        $pagePath = static::$dirPath;
        if (empty($segments)) {
            $blacklist = ['utils'];

            $html = '';
            foreach ($navListing as $base => $files) {
                foreach ($files as $file) {
                    if (in_array($file['file'], $blacklist)) {
                        continue;
                    }
                    $basePath = $this->selectPath($base, $extraListing);
                    $path = join('/', [
                        $basePath,
                        $base,
                        $file['file']
                    ]);
                    $html .= '<h2>' . ucwords($file['name'], true) . '</h2>';
                    $html .= static::view($path, [], true);
                }
            }
            $page = $html;

        } else if (count($segments) === 1) {
            $html  = '';
            $files = $navListing[first($segments)];
            $basePath = $this->selectPath(first($segments), $extraListing);
            foreach ($files as $fileInfo) {
                $path = join('/', [
                    $basePath,
                    $routePath,
                    $fileInfo['file']
                ]);
                $html .= '<h2>' . ucwords($fileInfo['name'], true) . '</h2>';
                $html .= static::view($path, [], true);
            }
            $page = $html;
        } else {
            $basePath = $this->selectPath(first($segments), $extraListing);
            $pagePath = $basePath . $routePath;
            $page = static::view($pagePath, [], true);
        }

        $segmentsCopy = array_values($segments);
        $pageName     = array_pop($segmentsCopy);
        return $this->renderGuide(static::$views . '/styleguide', [
            'base'  => $this->base,
            'navListing' => $navListing,
            'page'       => $page,
            'name'       => $pageName
        ], true);
    }

}
