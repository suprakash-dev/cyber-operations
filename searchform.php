<form id="search-block-form" class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <div class="input-group form-inline">
  <input type="search" class="form-search form-control search-field" placeholder="<?php echo esc_attr_x( 'Search by Incident, Threat Actor,  Keyword', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <span class="input-group-btn">
  <button type="submit" role="button" class="button js-form-submit form-submit btn-primary btn icon-only">
  <span class="sr-only">Search</span>
  <span class="icon glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
  </span>
 </div>
</form>