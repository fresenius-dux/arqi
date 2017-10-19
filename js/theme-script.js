jQuery(function ($) {
  'use strict';

  // The WordPress Default Widgets
  // Now we'll add some classes for the wordpress default widgets
  $('.widget_search input.search-field').addClass('form-control');
  $('.widget_search input.search-submit').addClass('btn btn-default');

  $('.widget_rss ul').addClass('media-list');

  $('.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul').addClass('nav nav-stacked');

  $('.widget_recent_comments ul#recentcomments').css('list-style', 'none').css('padding-left', '0');

  $('.widget_recent_comments ul#recentcomments li').css('padding', '5px 15px');

  $('table#wp-calendar').addClass('table table-striped');

  $('.dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).toggle('fast');
  });
});
