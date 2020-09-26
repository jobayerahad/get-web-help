<form method="get" role="" action="<?php echo home_url( "/" ) ?>" class="search-form">
  <input type="search" name="s" value="<?php echo get_search_query() ?>" placeholder="Search and hit enter..." class="form__input form__input--transparent">
  <button type="submit" class="btn">
    <i class="fas fa-search"></i>
  </button>
</form>