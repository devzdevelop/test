<form action="/" method="get">
    <!-- <label for="search">Search</label> -->
    <input type="hidden" name="cat" value="9"> <!-- Search based on category -->
    <input type="text" name="s" id="search-input" placeholder="search" value="<?php the_search_query(); ?>" required />
    <button type=" submit" id="searchsubmit">Search</button>
</form>