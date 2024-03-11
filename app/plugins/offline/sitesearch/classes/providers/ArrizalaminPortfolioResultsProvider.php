<?php
namespace OFFLINE\SiteSearch\Classes\Providers;

use ArrizalAmin\Portfolio\Models\Item;
use Illuminate\Database\Eloquent\Collection;
use OFFLINE\SiteSearch\Classes\Result;
use OFFLINE\SiteSearch\Models\Settings;

/**
 * Searches the contents generated by the
 * ArrizalAmin.Portfolio plugin
 *
 * @package OFFLINE\SiteSearch\Classes\Providers
 */
class ArrizalaminPortfolioResultsProvider extends ResultsProvider
{
    /**
     * Runs the search for this provider.
     *
     * @return ResultsProvider
     */
    public function search()
    {
        if ( ! $this->isInstalledAndEnabled()) {
            return $this;
        }

        foreach ($this->items() as $item) {
            // Make this result more relevant, if the query is found in the title
            $relevance = mb_stripos($item->title, $this->query) === false ? 1 : 2;

            $result        = new Result($this->query, $relevance);
            $result->title = $item->title;
            $result->text  = $item->description;
            $result->url   = $this->getUrl($item);
            $result->thumb = $this->getThumb($item->images);
            $result->model = $item;

            $this->addResult($result);
        }

        return $this;
    }

    /**
     * Get all posts with matching title or content.
     *
     * @return Collection
     */
    protected function items()
    {
        return Item::with(['images'])
                   ->where('title', 'like', "%{$this->query}%")
                   ->orWhere('description', 'like', "%{$this->query}%")
                   ->get();
    }

    /**
     * Checks if the ArrizalAmin.Portfolio Plugin is installed and
     * enabled in the config.
     *
     * @return bool
     */
    protected function isInstalledAndEnabled()
    {
        return $this->isPluginAvailable($this->identifier)
        && Settings::get('arrizalamin_portfolio_enabled', true);
    }

    /**
     * Generates the url to a blog post.
     *
     * @param $post
     *
     * @return string
     */
    protected function getUrl($post)
    {
        $url = trim(Settings::get('arrizalamin_portfolio_url', '/portfolio/project'), '/');

        return $this->withLocalePrefix(implode('/', [$url, $post->slug]));
    }

    /**
     * Display name for this provider.
     *
     * @return mixed
     */
    public function displayName()
    {
        return Settings::get('arrizalamin_portfolio_label', 'Portfolio');
    }

    /**
     * Return the plugin's identifier string.
     *
     * @return string
     */
    public function identifier()
    {
        return 'ArrizalAmin.Portfolio';
    }

}
