# v3.0.0 (xx)
 * Rewrite to Laravel 5.5
 * Rewrite to Destiny2

# v2.7.0 (August 16, 2017)
 * Switch URLs to Destiny 1 format.
 * Fix TravisCI
 * Prepare for fork for Destiny2

# v2.6.1 (April 25, 2017)
 * Cache profiles for 5 minutes (Allows clicking between tabs without murdering server)
 * Switch to Yarn instead of NPM for dependency resolution
 * Hardcode Heroic image until Bungie API has 390LL WoTM raid

# v2.6.0 (April 21, 2017)
 * Switch LeakyBucket packages.

# v2.5.2 (April 21, 2017)
 * Fix checkmark for WoTM 390LL raid.
 * Add summed raid completions to stats tab.
 * Defer to proxy more often to prevent "Slow down" errors.
 * Force CoE to static identifier to count completions.

# v2.5.1 (April 20, 2017)
 * Sum 390LL Raids with Featured & NonFeatured.
 * Force creation of 390LL WoTM Raid, because API does not return it.
 * Fix gamertag search for same name with spaces intermixed.
 * Ghost Fragment Fallen 6 is PSN only.
 * Don't read localStorage for invalid data.

# v2.5.0 (March 29, 2017)
 * Support for Age of Triumphs
 * Add 390 Light support
 * Remove "DailyCrucible" and "DailyStory"
 * Add "WeeklyFeaturedRaid" and "WeeklyStory"

# v2.4.0 (March 26, 2017)
 * Record Book tracker initial release - #62
 * StyleCI added (code style).

# v2.3.0 (January 19, 2017)
 * Leaky Bucket algorithm to prevent going over rate limit - #19
 * Add "Stats" tab.

# v2.2.3 (January 15, 2017)
 * Fix characters that are returning ("No stats") - #55.

# v2.2.2 (January 12, 2017)
 * Revert (Sort characters by last played, not static.)
 * Add Abbadon & Nova Mortis to exotics tab.

# v2.2.1 (December 14, 2016)
 * Fix index cache not expiring properly.
 * Sort characters by last played, not static.
 * Don't show expired events.
 * Update bugged grimoire cards (Thanks 1436346).
 * Handle decoding of entities properly.

# v2.2.0 (November 6, 2016)
 * Added "Exotic Weapon" quest tab.
 * Mark classified items properly to prevent dead images.
 * Add "Bugged" grimoire cards.
 * Switch to a file store for some caches

# v2.1.0 (October 17, 2016)
 * Ability for profiles to be private and still work.
 * Ability for requests to fail (Checklist, stats, history, etc) and still work.
 * update PSN Exclusive grimoire.

# v2.0.0 (September 30, 2016)
 * Rewrite to Laravel 5.1
 * Move to `/summary` endpoints and new `v2` advisor.
 * New Module based homepage
   * Trials Module (w/ rewards at 5/7 wins)
   * IB Module
   * Xur Module (w/ weapons sold)
   * ArmsDay Module (w/ packages sold)
 * HTTPS everywhere
 * Bower removed in favor of elixir

# v1.0.0 (Unknown)
 * initial release