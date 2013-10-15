<?php
/**
 * Search Form Template

 Author: 320press
**/

?>
<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
    <fieldset>
    <div class="input-group">
      <input type="text" name="s" id="search" placeholder="<?php _e("Search","bonestheme"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-primary"><?php _e("Search","bonestheme"); ?></button>
      </span>
    </div>
    </fieldset>
</form>

