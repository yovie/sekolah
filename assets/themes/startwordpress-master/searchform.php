<form role="form" method="get"
    class="form-horizontal" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text"name="s" id="s" placeholder="Pencarian" class="form-control"  value="<?php echo get_search_query(); ?>" />
</form>